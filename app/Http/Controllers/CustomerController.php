<?php

namespace App\Http\Controllers;

use App\Customer;

use App\Product;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerController extends Controller
{
    use softdeletes;

    public function getOrder()
    {
        $orders = Order::all();
        return view('pages.order', compact('orders'));
    }

    //  Customer
    public function getAllCustomer()
    {
        $customers = Customer::all();

        return view('pages.customer', compact('customers'));
    }

    public function getAddForm()
    {
        return view('pages.addCustomer');
    }

    public function addCustomer(Request $request)
    {
        $customer = new Customer;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->save();
        return redirect('/customer');
    }

    public function getCustomerUpdate($id)
    {
        $customer = Customer::all()->where('id', '=', $id);
        return view('pages.editCustomer', compact('customer'));
    }

    public function customerUpdate(Customer $customer, Request $request)
    {

        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->update();
        return redirect('/customer');
    }

    public function customerDelete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customer');
    }


    //  Product

    public function getAllProduct()
    {
        $products = Product::all();
        return view('pages.product', compact('products'));
    }

    public function getAddProductForm()
    {
        return view('pages.addProduct');

    }

    public function addProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->img_link = $request->img_link;
        $product->save();
        return redirect('/product');

    }

    public function getProductUpdate($id)
    {
        $product = Product::all()->where('id', '=', $id);
        return view('pages.editProducr', compact('product'));
    }

    public function productUpdate(Product $product, Request $request)
    {

        $product->name = $request->name;
        $product->price = $request->price;
        $product->img_link = $request->img_link;
        $product->update();
        return redirect('/product');
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');



      //  $products = Customer::find(2)->products->get(); many to many relation between customer and products

    }



    public function getAllCutomerOrder($customer_id)
    {
        $orders = Order::all()->where('customer_id','=',$customer_id);
        return view('pages.customerOrders', compact('orders'));

   // return $customer = Customer::find(1)->orders()->count();//how many order customer=2 do
      // return $s= Product::find(4)->orders()->get();//give us the custimer id =1 and order id="2"
     // $s= Order::find($id)->products()->get();//back to me all the products that order =1 that order
      //  return  $s= Order::find(3)->customer()->get();//back me the order id=1 for the customer

    }
}
