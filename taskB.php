public function luasLingkaran(int $n) {
  return 3.14 * ($n * $n);
}
public function luasPersegi(int $n) {
  return ($n / 3) * ($n / 5);
}
public function taskB() {
  for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0) {
      $tiga = $i / 3;
      $result = $this->luasLingkaran($tiga);
      echo sprintf('%0.2f', $result) . '<br>';
    } elseif ($i % 5 == 0) {
       $lima = $i / 5;
       $result = $this->luasLingkaran($lima);
       echo sprintf('%0.2f', $result) . '<br>';
    } elseif ($i % 3 && 5 == 0) {
       $tigaLima = $i / 5;
       $result = $this->luasPersegi($tigaLima);
       echo sprintf('%0.2f', $result) . '<br>';
    }
    echo sprintf('%0.2f', $i) . '<br>';
    }
}
