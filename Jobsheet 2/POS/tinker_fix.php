<?php
use Illuminate\Support\Facades\DB;
DB::insert("insert ignore into m_level(level_id, level_kode, level_nama, created_at) values(?,?,?,?)",[4, 'CUS', 'Pelanggan', now()]);
echo "Level 4 restored.\n";
