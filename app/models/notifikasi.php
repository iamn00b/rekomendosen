<?php

class Notifikasi extends Model {

	const BERI_REVIEW = 'review';
	const BERI_KOMENTAR = 'komentar';
	const BERI_VOTE = 'vote';

	protected $table = 'notifikasi';
	
	public function pengguna() {
		return $this->belongsTo('Pengguna');
	}

	public function teks() {
		$teks = "x";
		switch ($this->jenis) {
			case self::BERI_REVIEW:
				try {
					$dosen = Dosen::find($this->id_log);
					$teks = "Seseorang memberi review kepada dosen " . ucfirst($dosen->nama);
				} catch (Exception $e) {
					$teks = "Seseorang memberi review kepada seorang dosen";
				}
				
				break;

			case self::BERI_KOMENTAR:
				try {
					$review = Review::find($this->id_log);
					if($review->pengguna_id == $this->pengguna_id)
						$teks = "Seseorang mengomentari review anda untuk dosen " . ucfirst($review->dosen->nama);
					else
						 $teks = "Seseorang memberi komentar pada review untuk dosen " . ucfirst($review->dosen->nama) . " yang kamu komentari";
				} catch (Exception $e) {
					$teks = "Seseorang memberi komentar pada review untuk dosen yang kamu komentari";
				}
				
				break;

			case self::BERI_VOTE:
				try {
					$vote = Vote::find($this->id_log);
					$teks = "Seseorang memberi " . ucfirst($this->keterangan) . "vote untuk review anda untuk dosen " . ucfirst($vote->review->dosen->nama);
				} catch (Exception $e) {
					$teks = "Seseorang memberi " . ucfirst($this->keterangan) . "vote untuk review anda untuk seorang dosen";
				}
				
				break;

			default:
				$teks = "Terjadi error pada sistem";
				break;
		}

		return $teks;
	}

}