<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use App\Models\Clicks;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ShortLinkController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
           'link' => 'required|url'
        ]);

        $input['link'] = $request->link;
        $alreadyexists = ShortLink::where('code',$request->code)->exists();
        $shortlinkcode = $request->code;
        if($alreadyexists){
            $shortlinkcode = $this->getBetterPath($shortlinkcode,0);
        }
        if($shortlinkcode==null){
            $shortlinkcode =  Str::random(9);;
        }

        $input['code'] = $shortlinkcode;

        ShortLink::create($input);
        $shortlinkid = ShortLink::where('code',$shortlinkcode)->get()->first()->id;
        $clicks['linkid'] = $shortlinkid;
        $clicks['clicks'] = 0;
        Clicks::create($clicks);
        return redirect('/')
             ->with('success', '<div class="font-bold">&raquo;&#32;&#32;<a class="newshortlinky" href="/'.$shortlinkcode.'">Your new ShortLinky:  '.request()->getHttpHost().'/'.$shortlinkcode.'</a></div><div class="font-bold">&raquo;&#32;&#32;<a class="newshortlinky" href="/view/'.$shortlinkcode.'">'.'Your personal ShortLinky info page.'.'</a></div>');
    }

    public function shortenLink($code)
    {
        $find = ShortLink::where('code', $code)->get()->first();
        $clicks = Clicks::where('linkid',$find->id)->get()->first();
        $clicks->clicks = $clicks->clicks + 1;
        $clicks->save();
        return redirect($find->link);
    }
    public function shortenLinkInfo($code)
    {
        $find = ShortLink::where('code', $code)->get()->first();
        $clicks = Clicks::where('linkid',$find->id)->get()->first();
        $linkinfo['link']=$find;
        $linkinfo['clicks']=$clicks->clicks;
        return view('info', compact('linkinfo'));
    }

    public function getBetterPath($input,$time){
        $faker = Faker::create();
        $output = '';
        if($time==0){
            if(strlen($input)<9){
                $output = $input.$faker->randomNumber(9-strlen($input),true);
            }else{
                $output = $faker->shuffle($input);
            }

        }else{
            $output = $faker->randomNumber(9,true);
        }

        $alreadyexists = ShortLink::where('code',$output)->exists();
        if($alreadyexists && $time==0){
            $output = $this->getBetterPath($output,1);
        }else if($alreadyexists){
            $output = $this->getBetterPath($output,0);
        }

        return $output;
    }
}
