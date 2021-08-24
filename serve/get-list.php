<?php
    require_once "connect.php";
    //Để chuyển định dạng format trả về thành text/xml
    header('Content-Type: text/xml; charset=UTF-8');
    $id = $_GET['ID'];
    $queryString = 'SELECT * FROM Things;';
    if (isset($id)) {
        $queryString = $queryString. 'WHERE ID = '. $id;
    }
    //Thực hiện câu lệnh truy vấn
    $result_set = $conn->query($queryString);

    //Đảm bào có bản ghi trả về
    if ($result_set->num_rows > 0) {
        //Tạo ra cây DOM và cấu hình
        $doc = new DOMDocument();
        $doc->formatOutput = true;
        //Tạo ra root element
        $thingsNode = $doc->createElement('Things');
        //Fetch dữ liệu xử lí vòng lặp
        while ($row = $result_set -> fetch_assoc()) {
            //Mỗi vòng lặp tạo ra một phần tử Thinh
            $thingNode = $doc->createElement('Thing');
            //Tạo ra thẻ ID
            $idNode = $doc->createElement('Id');
            //Trong thẻ ID thì thêm nội dung text
            $idNode->appendChild($doc->createTextNode($row['ID']));
            //Tạo ra thẻ description
            $desNode = $doc->createElement('Description');
            //Trong thẻ Description thêm nội dung text
            $desNode->appendChild($doc->createTextNode($row['Description']));
            //Cho các thẻ id và description vào trong thẻ thinh
            $thingNode->appendChild($idNode);//Đưa thẻ id vào trong thinh
            $thingNode->appendChild($desNode);//Đưa thẻ description vào trong thinh
            //
            $thingsNode->appendChild($thingNode);
        }
        //Nhồi thể root vào document
        $doc->appendChild($thingsNode);
        //Save dưới dạng XML và trả về
        echo $doc->saveXML();
    }