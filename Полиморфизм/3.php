<?php
abstract class Document {
    abstract public function save();
}
class PDFDocument extends Document {
    public function save() {
        echo "Сохранение документа в формате PDF.<br>";
    }
}
class WordDocument extends Document {
    public function save() {
        echo "Сохранение документа в формате Word.<br>";
    }
}
class ExcelDocument extends Document {
    public function save() {
        echo "Сохранение документа в формате Excel.<br>";
    }
}
// Тестирование
$pdfDoc = new PDFDocument();
$wordDoc = new WordDocument();
$excelDoc = new ExcelDocument();

$pdfDoc->save();   // Сохранение документа в формате PDF
$wordDoc->save();  // Сохранение документа в формате Word
$excelDoc->save(); // Сохранение документа в формате Excel
?>