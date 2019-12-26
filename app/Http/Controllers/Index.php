<?php
namespace App\Http\Controllers;

use EasyWeChat\Factory;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class Index extends Controller
{
    public function index() {
        dump(config('wechat.official_account.default.app_id'));
        //dump(DB::table('customer'));
    }

    public function show(){
        dump(DB::table('customer'));
    }

    public function wechat(Request $request) {
        $config = config('wechat.official_account');
        $testConfig = $config['test'];


        $app = Factory::officialAccount($testConfig);
        //dump($app);
        $response = $app->server->serve();

        return $response;

    }
}