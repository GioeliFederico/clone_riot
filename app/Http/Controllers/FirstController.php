<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function champions() {
        $champions = [
            'aatrox' => ['name' => 'AATROX', 'img' => '/media/RiotX_ChampionList_aatrox.jpg'],
            'ahri' => ['name' => 'AHRI', 'img' => '/media/RiotX_ChampionList_ahri.jpg'],
            'akali' => ['name' => 'AKALI', 'img' => '/media/RiotX_ChampionList_akali.jpg'],
            'alistar' => ['name' => 'ALISTAR', 'img' => '/media/RiotX_ChampionList_alistar.jpg'],
            'amumu' => ['name' => 'AMUMU', 'img' => '/media/RiotX_ChampionList_amumu.jpg'],
            'anivia' => ['name' => 'ANIVIA', 'img' => '/media/RiotX_ChampionList_anivia.jpg'],
            'annie' => ['name' => 'ANNIE', 'img' => '/media/RiotX_ChampionList_annie.jpg'],
            'aphelios' => ['name' => 'APHELIOS', 'img' => '/media/RiotX_ChampionList_aphelios2.jpg'],
            'ashe' => ['name' => 'ASHE', 'img' => '/media/RiotX_ChampionList_ashe.jpg'],
            'aurelionsol' => ['name' => 'AURELION SOL', 'img' => '/media/RiotX_ChampionList_aurelionsol.jpg'],
            'azir' => ['name' => 'AZIR', 'img' => '/media/RiotX_ChampionList_azir.jpg'],
            'bard' => ['name' => 'BARD', 'img' => '/media/RiotX_ChampionList_bard.jpg'],
            'blitzcrank' => ['name' => 'BLITZCRANK', 'img' => '/media/RiotX_ChampionList_blitzcrank.jpg'],
            'brand' => ['name' => 'BRAND', 'img' => '/media/RiotX_ChampionList_brand.jpg'],
            'braum' => ['name' => 'BRAUM', 'img' => '/media/RiotX_ChampionList_braum.jpg'],

        ];
        return view('champions', ['champions' => $champions]);
    }

}
