<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customerQuery = Customer::query()
            ->orderBy('id', 'desc');
        $dataCustomer = $customerQuery->paginate(10);


        $data = [
            'customers' => $dataCustomer
        ];

        return view('admin.customers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store customer

        //
        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        /** @var Customer $customer */
        $customer = new Customer([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
        ]);

        $customer->save();

        return redirect(route('customers.index'))->with('success', 'Customer saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        /** @var Customer $customer */
        $customer = Customer::find($id);

        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->first_name = $request->get('first_name');
        $customer->last_name = $request->get('last_name');
        $customer->email = $request->get('email');
        $customer->job_title = $request->get('job_title');
        $customer->city = $request->get('city');
        $customer->country = $request->get('country');
        $customer->save();

        return redirect(route('customers.index'))->with('success', 'Customer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        /** @var Customer $customer */
        $customer = Customer::find($id);
        $customer->delete();

        return redirect(route('customers.index'))->with('success', 'Customer deleted!');
    }
}
