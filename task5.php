<?php

//　課題３「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerのbbbというAction に渡すRoutingの設定」を書いてみてください
     Route::get ('XXX\AAAController@bbb');


//課題４　【応用】 前章でAdmin/ProfileControllerを作成し、add Action, edit Actionを追加しました。web.phpを編集して、admin/profile/create にアクセスしたら ProfileController の add Action に、admin/profile/edit にアクセスしたら ProfileController の edit Action に割り当てるように設定してください
Route::get('admin/profile/create',
     'Admin\ProfileController@add');
Route::get('admin/profile/edit',
      'Admin\ProfileController@edit'); 