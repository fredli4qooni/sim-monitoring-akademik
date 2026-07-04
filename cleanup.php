<?php
App\Models\Mahasiswa::where('nama', 'like', 'Dummy Data %')->each(function($m) {
    $m->dataTambahan()->delete();
    $m->prediksiKelulusan()->delete();
    $m->delete();
});
echo "Cleanup done.\n";
exit;
