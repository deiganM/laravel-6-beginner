<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::where('active', 1)->get();

        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        $customer = new Customer();

        return view('customer.create', compact('customer'));
    }

    public function store()
    {
        // $data = request()->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        // ]);

        // now using validatedData() below instead of what is above
        $customer = Customer::create($this->validatedData());

        return redirect('/customers/' . $customer->id);
    }

    // A shortcut compared to index()
    public function show(Customer $customer)
    {
        // $customer = Customer::findOrFail($customerId);

        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer)
    {
        $customer->update($this->validatedData());

        return redirect('/customers');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect('/customers');
    }

    protected function validatedData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
