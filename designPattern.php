<?
/**
 *
 */
class araba{
  public $ad;
  public $marka;
}

$megane = new araba();
$megane->ad="megane";
$megane->marka="renoult";

echo $megane->ad."\n";
echo $megane->marka;
// burda araba lasınmız vardı burdaki değerleri tanumladık en basit kullanımı

//şimdiki kullanımda içinde fonksiyon yapıcaz

class sekil{
  public $width=0;
  public $height=0;

  function cevre(){
  return (2*($this->width + $this->height));
  }
  function alan(){
  return ($this->width * $this->height);
  }
  }

$kare = new sekil();
$kare->width=25;
$kare->height=25;
echo "\n//////////////////// kare için hesablanan alan =".$kare->alan();
echo "\n//////////////////// kare için hesablanan cevre =".$kare->cevre();



//şimdi kurucu metotlara geçiyoruz (private)
class kisi{
     private $ad ;
     private $soyad;
     public function __construct($ad,$soyad){//__construct sınıf tanımlandığı anda çalışır
      $this->ad=$ad;
      $this->soyad=$soyad;
    }
    public function adSoyad(){
      return $this->ad." ".$this->soyad;
    }
}

$talha = new kisi("muhammed Talha"," ÇORBACI");
echo "//////////////////".$talha->adSoyad();
///şimdi yıkıcı methoda geöiyoruz
class kisi2{
     private $ad ;
     private $soyad;
     public function __construct($ad,$soyad){//__construct sınıf tanımlandığı anda çalışır
      $this->ad=$ad;
      $this->soyad=$soyad;
    }
    public function __destruct(){///yıkıcı
      $this->ad="xxxx";
      $this->soyad="vvvvvvvvvvv";
      echo __CLASS__.$this->ad."".$this->soyad;//class yıkıcı

    }
    public function adSoyad(){
      return $this->ad." ".$this->soyad;
    }
}

$talha = new kisi2("muhammed Talha"," ÇORBACI");
echo "//////////////////".$talha->adSoyad();

unset($talha); ///talhayı sildi






?>
