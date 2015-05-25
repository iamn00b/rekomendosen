<?php

class Riwayat extends Model {

	const BERI_REVIEW = 'review';
	const BERI_KOMENTAR = 'komentar';
	const BERI_VOTE = 'vote';
	const HAPUS_REVIEW = 'h_review';
	const HAPUS_KOMENTAR = 'h_komentar';
	const UBAH_VOTE = 'u_vote';

	protected $table = 'riwayat';
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}

	public function teks() {
		$teks = "x";
		switch ($this->jenis) {
			case self::BERI_REVIEW:
				try {
					$review = Review::find($this->id_log);
					$teks = "Memberi review kepada dosen " . ucfirst($review->dosen->nama);
				} catch (Exception $e) {
					$teks = "Memberi review kepada seorang dosen";
				}
				
				break;

			case self::BERI_KOMENTAR:
				try {
					$komentar = Komentar::find($this->id_log);
					$teks = "Memberi komentar di review untuk dosen " . ucfirst($komentar->review->dosen->nama);
				} catch (Exception $e) {
					$teks = "Memberi komentar di review untuk seorang dosen";
				}
				
				break;

			case self::BERI_VOTE:
				try {
					$vote = Vote::find($this->id_log);
					$teks = "Memberi " . ucfirst($this->keterangan) . "vote untuk review untuk dosen " . ucfirst($vote->review->dosen->nama);
				} catch (Exception $e) {
					$teks = "Memberi " . ucfirst($this->keterangan) . "vote untuk review untuk seorang dosen";
				}
				
				break;

			case self::HAPUS_REVIEW:
				try {
					$dosen = Dosen::find($this->id_log);
					$teks = "Menghapus review untuk dosen " . ucfirst($dosen->nama);
				} catch (Exception $e) {
					$teks = "Menghapus review untuk seorang dosen";
				}
				
				break;

			case self::HAPUS_KOMENTAR:
				try {
					$dosen = Dosen::find($this->id_log);
					$teks = "Menghapus komentar di review untuk dosen " . ucfirst($dosen->nama);
				} catch (Exception $e) {
					$teks = "Menghapus komentar di review untuk seorang dosen";
				}
				
				break;

			case self::UBAH_VOTE:
				try {
					$vote = Vote::find($this->id_log);
					$teks = "Mengubah vote menjadi " . ucfirst($this->keterangan) . "vote untuk review untuk dosen " . ucfirst($vote->review->dosen->nama);
				} catch (Exception $e) {
					$teks = "Mengubah vote menjadi " . ucfirst($this->keterangan) . "vote untuk review untuk seorang dosen";
				}
				
				break;

			default:
				$teks = "Terjadi error pada sistem";
				break;
		}

		return $teks;
	}

	// public function teks() {
	// 	$teks = "x";

	// 	switch ($this->jenis) {
	// 		case self::BERI_REVIEW:
	// 			$teks = $app->urlFor('dosen', )
	// 			break;

	// 		case self::BERI_KOMENTAR:
	// 			break;

	// 		case self::BERI_VOTE:
	// 			break;

	// 		case self::HAPUS_REVIEW:
	// 			break;

	// 		case self::HAPUS_KOMENTAR:
	// 			break;

	// 		case self::UBAH_VOTE:
	// 			break;

	// 		default:
	// 			$teks = "#!";
	// 			break;
	// 	}

	// 	return $teks;
	// }
}