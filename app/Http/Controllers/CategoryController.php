<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Attribute;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function create(Request $request){
        Category::create(attributes: [
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }
}



8.SELECT*FROM tbbarang_4322  WHERE jenisbarang_4322='Assesoris Komputer';

 
9. SELECT*FROM tbbarang_4322 WHERE hargabarang_4322 < 100000;
 
10. SELECT * FROM tbbarang_4322 WHERE hargabarang_4322 > 100000; 

 
11. SELECT MIN(hargabarang_4322) FROM tbbarang_4322;
 
12. SELECT*FROM tbtransaksi_4322 ORDER BY tgltransaksi_4322 DESC;  
13. SELECT*FROM tbtransaksi_4322 WHERE kuantitas_4322 > 10;
