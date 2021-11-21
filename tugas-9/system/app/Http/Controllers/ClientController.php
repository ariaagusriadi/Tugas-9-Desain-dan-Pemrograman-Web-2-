<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ClientController extends Controller
{



  function showshop()
  {
    $user = request()->user();
    $data['list_produk'] = $user->produk;
    return view('client.shop', $data);
  }

  function filter()
  {
    $nama = request('nama');
    $data['nama'] = $nama;
    $data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();

    return view('client.shop', $data);
  }

  function filter2()
  {
    $harga_min = request('harga_min');
    $harga_max = request('harga_max');
    $data['harga_min'] = $harga_min;
    $data['harga_max'] = $harga_max;

    $data['list_produk'] = Produk::whereBetween('harga', [$harga_min, $harga_max])->get();
    return view('client.shop', $data);
  }


  function showhome()
  {
    return view('client.home');
  }
  function showcontact()
  {
    return view('client.contact');
  }
  function showabout()
  {
    return view('client.about');
  }

  function showprodukshop(Produk $produk)
  {

    $data['produk'] = $produk;
    return view('client.produkshop', $data);
  }
}
