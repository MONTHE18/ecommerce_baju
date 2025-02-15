<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function adminproducts(Request $request){

        $products = Products::all();
        $products = new products();
        if ($request->has('search')) {
            $search = $request->input('search');
            $products = $products->where('nama_product', 'LIKE', '%'.$search.'%');
        }

        //filter data terlama terbaru
        $dataFilter = $request->input('sort_data');
        if ($dataFilter == 'latest') {
            $products->orderBy('id', 'desc');
        }
        $products = $products->paginate(10);

        return view('admin.page.products.admin-product', compact('products'));
    }
    public function showAdd(){
        return view('admin.page.products.tambah-data', [
            'title' => 'TambahData',
        ]);
    }
    public function createProducts(Request $request)
    {
        // Validasi data input
        $validated =$request->validate([
            'SKU' => 'required|unique:products,SKU',
            'nama_product' => 'required',
            'kategory' => 'required',
            'harga' => 'required|numeric',
            'quantity' => 'required|integer',
            'quantity_out' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload foto
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('products', 'public');
        }

        // Save data to the database
        Products::create($validated);

        return redirect()->route('adminproduct')->with('success', 'Product berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $products = products::find($id);
        $products->delete();

        return redirect()->route('adminproduct')->with('success', 'Data Berhasil Dihapus');
    }

    public function showDetail($id)
    {
        // $products = products::all();
        $products = products::findOrFail($id);

        return view('admin.page.products.detail-data', compact('products'));
    }

    public function showEdit($id)
    {
        $products = products::findOrFail($id);

        return view('admin.page.products.edit-data', compact('products'));
    }

    public function update(Request $request, $id){

        $products = products::findOrFail($id);
        $products->update($request->all());
        return redirect()->route('adminproduct')->with('success', 'Data Berhasil DiUpdate');
    
       }
    
    






    /*
     *  MELAKUKAN PROSES CREATE EVENT
     */
    // public function createEvent(Request $request)
    // {
    //     //validasi
    //     $messages = [
    //         'sku.required' => 'Category Event wajib diisi.',
    //         'nama_product.required' => 'Category Activity event wajib diisi.',
    //         'type.required' => 'Title Event wajib diisi.',
    //         'kategory.required' => 'Cover event wajib diupload.',
    //         'harga.required' => 'Time Category event wajib diisi.',
    //         'discount.required' => 'Pay Category Event wajib diisi.',
    //         'quantity.required' => 'Registration Start wajib diisi.',
    //         'quantity_out.required' => 'Registration End wajib diisi.',
    //         'foto.image' => 'Description event harus berupa teks.',
    //         'is_active.required' => 'Status event wajib diisi.',
    //     ];

    //     $request->validate([
    //         'category_event_id' => 'required',
    //         'activity_category_event' => 'required',
    //         'title_event' => 'required',
    //         'cover_event' => 'required|image|mimes:jpeg,png,jpg',
    //         'time_category_event' => 'required|string|max:255',
    //         'pay_category_event' => 'required|string|max:255',
    //         'registration_start' => 'required',
    //         'registration_end' => 'required|after_or_equal:registration_start',
    //         'date_event' => 'required|date',
    //         'time_start' => 'required',
    //         'time_finish' => 'required|after:time_start',
    //         'description_event' => 'required|string',
    //         'status_event' => 'required',
    //     ], $messages);

    //     // membuat slug
    //     $Eventslug = str_replace(' ', '-', $request->title_event);

    //     // mengupload file gambar
    //     $extension = $request->file('cover_event')->getClientOriginalExtension();
    //     $photoName = $request->title_event.now()->timestamp.'.'.$extension;
    //     $request->file('cover_event')->storeAs('assets/img/event/', $photoName);

    //     //pembuatan event
    //     $event = Event::create([
    //         'category_event_id' => $request->category_event_id,
    //         'activity_category_event' => $request->activity_category_event,
    //         'title_event' => $request->title_event,
    //         'slug_event' => $Eventslug,
    //         'time_category_event' => $request->time_category_event,
    //         'pay_category_event' => $request->pay_category_event,
    //         'registration_start' => $request->registration_start,
    //         'registration_end' => $request->registration_end,
    //         'date_event' => $request->date_event,
    //         'time_start' => $request->time_start,
    //         'time_finish' => $request->time_finish,
    //         'cover_event' => $photoName,
    //         'price_event' => $request->price_event,
    //         'description_event' => $request->description_event,
    //         'status_event' => $request->status_event,
    //         'is_place' => $request->is_place,
    //         'isLink' => $request->isLink,
    //     ]);

    //     // pembuatan sesi event
    //     foreach ($request->all() as $key => $value) {
    //         if (strpos($key, 'title_sesi') === 0 && $value !== null) {
    //             $sesiNumber = substr($key, 10);
    //             $pembicaraId = "pembicara_id$sesiNumber";
    //             if ($request->has($pembicaraId) && ! empty($request->$pembicaraId)) {
    //                 EventMaterialSession::create([
    //                     'title_sesi' => $value,
    //                     'event_id' => $event->id,
    //                     'pembicara_id' => $request->$pembicaraId,
    //                 ]);
    //             }
    //         }
    //     }

    //     return redirect()->route('admin.events.index');
    // }
}
