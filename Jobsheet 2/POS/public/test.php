<?php
require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
try {
    // Restore level_id 4
    \Illuminate\Support\Facades\DB::insert('insert ignore into m_level(level_id, level_kode, level_nama, created_at) values(?,?,?,?)',[4, 'CUS', 'Pelanggan', now()]);
    
    // Now call the user controller route which inserts the user
    $request = Illuminate\Http\Request::create('/user', 'GET');
    $response = $kernel->handle($request);
    
    if ($response->exception) {
        echo "ERROR: " . $response->exception->getMessage();
    } else {
        echo "SUCCESS restoring level 4 and inserting user!";
    }
} catch (\Exception $e) {
    echo "ERROR: " . $e->getMessage();
}
