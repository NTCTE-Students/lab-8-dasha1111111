<?php
trait Cacheable {
    private $cache = [];
    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }
    public function setCache($key, $value) {
        $this->cache[$key] = $value;
    }
}
class DataProvider {
    use Cacheable;
    public function fetchData($key) {
        $cachedData = $this->getCache($key);
        if ($cachedData !== null) {
            return "Данные из кэша: " . $cachedData;
        }
        $newData = "Данные для ключа {$key}"; // Здесь запрос к базе данных
        $this->setCache($key, $newData);
        return $newData;
    }
}
class ProductRepository {
    use Cacheable;
    public function getProduct($id) {
        $cachedProduct = $this->getCache($id);
        if ($cachedProduct !== null) {
            return "Продукт из кэша: " . $cachedProduct;
        }
        $newProduct = "Продукт с ID {$id}"; // Запрос продукта из базы данных
        $this->setCache($id, $newProduct);
        return $newProduct;
    }
}
// Тестирование
$dataProvider = new DataProvider();
echo $dataProvider->fetchData("user123") . "<br>";
echo $dataProvider->fetchData("user123") . "<br>"; // Данные должны быть из кэша

$productRepo = new ProductRepository();
echo $productRepo->getProduct(1) . "<br>";
echo $productRepo->getProduct(1) . "<br>"; // Данные должны быть из кэша
?>