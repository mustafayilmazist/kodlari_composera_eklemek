<?php 

/**
 * [tokenUret her çalıştırıldığından benzersiz karakterlerden oluşan bir değer üretir.]
 * @param  [string|int] $tuz [fazladan değer karıştırıcı boş bırakılabilir]
 * @return [string]      [token]
 */
function tokenUret($tuz=""){
	return md5(sha1(uniqid().$tuz));
}
echo tokenUret("karışık-kelime");