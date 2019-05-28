<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\bill;
use App\BillDetail;
use App\Users;
use App\Contact;
use Session;
use App\Http\Requests\RegisterRequest;

class PostController extends Controller
{
    //
    public function getHome(){
        $slide=Slide::all();
        // return view('post.home',['slide'=>$slide]);
        $new_product=Product::where('new',1)->paginate(4);
        $count_new_product=Product::where('new',1)->get();
        $sale_product=Product::where('promotion_price','<>',0)->paginate(8);
        return view('post.home',compact('slide','new_product','sale_product','count_new_product'));
    }

    public function getLoaiSP($type){
        $sp_theoloai=Product::where('id_type',$type)->paginate(6);
        $loai=ProductType::all();
        return view('post.type_product',compact('sp_theoloai','loai'));
    }

    public function getChitiet(Request $request){
        $sanpham=Product::where('id',$request->id)->first();
        $sp_cungloai=Product::where('id_type',$sanpham->id_type)->paginate(3);
        return view('post.product',compact('sanpham','sp_cungloai'));
    }

    public function getLienhe(){
        return view('post.contact');
    }

    public function getGioithieu(){
        return view('post.about');
    }

    public function getAddtoCart(Request $request,$id){
    $product = Product::find($id);
    $oldCart = Session('cart')?Session::get('cart'):null;
    $cart = new Cart($oldCart);

    $cart->add($product,$id);
    $request->session()->put('cart',$cart);
    return redirect()->back();
    }

    public function getDelItemCart($id){
    $oldCart=Session::has('cart')?Session::get('cart'):null;
    $cart=new Cart($oldCart);
    $cart->removeItem($id);
//    if(count($cart->items)>0){
//     Session::put('cart',$cart);
//    }
//    else{
//        Session::forget('cart');
//    }
    Session::put('cart',$cart);
    return redirect()->back();
    }

    public function getCheckout(){
        if(Session::has('cart')){
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        // dd($cart);
        return view('post.checkout',['product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        }
        else{
            return view('post.checkout');
        }
    }

    public function postCheckout(Request $request){
       $cart=Session::get('cart');

       $customer = new Customer;
       $customer->name = $request->full_name; 
       $customer->gender=$request->gender;
       $customer->email=$request->email;
       $customer->address=$request->address;
       $customer->phone_number=$request->phone;
       $customer->note=$request->note;

       $customer->save();
    //    $credentials=array('full_name'=>$customer->name,'email'=>$customer->email,'phone'=>$customer->phone_number);
    //    if(Auth::attempt($credentials)){
    //     $customer->save();
    //    }
    //    else{
    //        alert('Hãy tạo tài khoản');
    //    }

       $bill=new Bill;
       $bill->id_customer=$customer->id;
       $bill->date_order=date('y-m-d');
       $bill->total=$cart->totalPrice;
       $bill->payment=$request->payment_method;
       $bill->note=$request->note;
       $bill->save();

       foreach($cart->items as $key=>$value){
        $bill_detail=new BillDetail;
        $bill_detail->id_bill = $bill->id;
        $bill_detail->id_product = $key;
        $bill_detail->quantity = $value['qty'];
        $bill_detail->unit_price = $value['price']/$value['qty'];
        $bill_detail->save();
       }
       Session::forget('cart');
       return redirect()->back()->with('thongbao','Đặt hàng thành công');
    }

      public function getSearch(Request $request){
              $product=Product::where('name','like','%'.$request->key.'%')
              ->orWhere('unit_price',$request->key)->get();
              return view('post.search',compact('product'));
    }

    public function postRegister(RegisterRequest $request){
      $user=new Users();
        $user->full_name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->address=$request->address;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success','Tạo tài khoản thành công');

    }

    public function getLogin(){
        return view('post.login');
    }
    public function postLogin(Request $request){
        $this->validate($request,
            [
              'email'=>'required|email',
              'password'=>'required|min:5'
            ],
            [
               'email.required'=>'Vui lòng nhập email',
               'email.email'=>'Nhập đúng định dạng',
               'password.required'=>'Vui lòng nhập mật khẩu',
               'password.min'=>'Nhập ít nhất 5 kí tự'
            ]
        );
    //ủy nhiệm cho credentials
        $credentials = array('email'=>$request->email,'password'=>$request->password);
        if(Auth::attempt($credentials)){
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function info(){
        
    }

    public function contact(Request $request){
        //   $contact=new Contact();
        //   $contact->name=$request->name;
        //   $contact->email=$request->email;
        //   $contact->password=$request->password;
        //   $contact->product=$request->product;
        //   $contact->comment=$request->comment;

        //   $contact->save();
        //   return redirect()->back();
    }
    public function admin(){
        return view('post.admin');
    }

    public function postLoginAdmin(Request $request){
     
     $credentials =array('email'=>$request->email,'password'=>$request->password);
     if(Auth::attempt($credentials)){
         return redirect()->back()->with('success','Thanh cong');
     }
     else{
         return redirect()->back()->with('danger','That bai');
     }
    //    if($email=="admin@gmail.com" && $password=="123456"){
    //        return redirect()->back()->with('thanhcong','Chào mừng bạn đến trang admin');
    //    }else{
    //        return redirect()->back()->with('thatbai','Xin mời đăng nhập lại');
    //    }
    }
    public function logoutAdmin(){
        Auth::logout();
        return redirect()->back();
    }
    public function guest(){
        $customer=Customer::all();
        return view('post.guest',compact('customer'));
    }
    public function productAdmin(){
        $product=Product::all();
        return view('post.product-admin',compact('product'));
    }
    public function updateProduct($id){
        $update_product=Product::find($id);
        return view('post.update_product',compact('update_product'));
    }
    public function update_sp(Request $request,$id){
        $update_sp=Product::find($id);
        $update_sp->name=$request->name;
        $update_sp->description=$request->description;
        $update_sp->unit_price=$request->unit_price;
        $update_sp->promotion_price=$request->promotion_price;

        $update_sp->save();
       return redirect()->back();
    }
    public function delete_sp($id){
        // Product::find($id)->delete();
        // return redirect()->back();
        Product::destroy($id);
        return redirect()->back();
    }
    public function add_product(){
      $add_product=ProductType::all();
      return view('post.add_product',compact('add_product'));
    }
    public function add_sp(Request $request){
        $add_sp=new Product();
        if($request->hasFile('image'))
        {
            $file=$request->image;

            $tenFile= $file->getClientOriginalName();

            $file->move('image'.'/'.'product',$tenFile);
            $add_sp->image=$tenFile;
            $add_sp->name=$request->name;
            $add_sp->description=$request->description;
            $add_sp->unit_price=$request->unit_price;
            $add_sp->promotion_price=$request->promotion_price;
        
            $add_sp->save();
        }
        else{
            echo "Chưa thêm hình ảnh";
        }

    // if($request->hasFile('image')){
    //     // dd($request->image);
    //     dd($request->file('image'));
    // }
    // else{
    //     echo "Chưa có";
    // }
        return redirect()->back();
    }
}
