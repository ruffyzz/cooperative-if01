<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\MandatorySaving;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index',compact('customers'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        $mandatorySaving = MandatorySaving::where('customer_id', $id)->get();
        return view('admin.customers.show',compact('customer','mandatorySaving'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'address' => 'required',
            'phone' => 'numeric',
        ]);

        $customer = Customer::find($request->id);
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;

        if ($customer->save()) {
            return redirect()->route('admin-customer.index')->with('success', "Data Nasabah dengan kode $customer->code berhasil diperbarui");
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui data nasabah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $customer = Customer::find($id);
            if ($customer->delete()) {
                return redirect()->route('admin-customer.index')->with('success', "Data Nasabah dengan kode $customer->code berhasil dihapus");
            } else {
                return redirect()->back()->with('error', 'Gagal menghapus data nasabah');
            }
        }
    }
}
