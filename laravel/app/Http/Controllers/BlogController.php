<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $makaleler = [
        1 => [
            'id' => 1,
            'baslik' => 'Balıkesirspor VS Bigaspor',
            'ozet' => 'Balıkesirspor Bigaspor\'u 3-0 mağlup etti',
            'icerik' => 'Balıkesirspor bir gol attı. Yetmedi bitane daha attı. O da yetmedi bir tane daha attı. Sonuç 3-0...',
            'tarih' => '7 Ekim 2026'
        ],
        2 => [
            'id' => 2,
            'baslik' => 'Oyun Geliştirmede Unity vs Godot',
            'ozet' => 'İki popüler oyun motorunun artıları ve eksileri.',
            'icerik' => 'Godot\'un para istememesi ve açık kaynaklı olması her ne kadar onu göz boyaycı bir hale getirse de geniş kapsamlı projelerde Unity çok büyük kolaylıklar sağlıyor...',
            'tarih' => '20 Ekim 2026'
        ]
    ];

    public function index()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        return view('index', ['makaleler' => $this->makaleler]);
    }

    public function show($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('login');
        }

        if (!isset($this->makaleler[$id])) {
            abort(404);
        }

        return view('detay', ['makale' => $this->makaleler[$id]]);
    }
}
