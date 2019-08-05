<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function books(Request $request)
    {

        $books = Storage::get('public/books.json');
        $books = json_decode($books,true);
        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $books]
        );

    }

    public function houses(Request $request)
    {

        $houses = Storage::get('public/houses.json');
        $houses = json_decode($houses,true);
        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $houses]
        );

    }


    public function character($id)
    {

        $id = $id ?: 2;

        $character = Storage::get('public/books/characters'.$id.'.json');
        $character = json_decode($character,true);

        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $character]
        );

    }


    public function characters()
    {

        $character = Storage::get('public/characters.json');
        $character = json_decode($character,true);

        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $character]
        );

    }

    public function storeCharacter()
    {

        $arr = [
          "https://anapioficeandfire.com/api/characters/2",
          "https://anapioficeandfire.com/api/characters/12",
          "https://anapioficeandfire.com/api/characters/13",
          "https://anapioficeandfire.com/api/characters/16",
          "https://anapioficeandfire.com/api/characters/20",
          "https://anapioficeandfire.com/api/characters/27",
          "https://anapioficeandfire.com/api/characters/31",
          "https://anapioficeandfire.com/api/characters/38",
          "https://anapioficeandfire.com/api/characters/39",
          "https://anapioficeandfire.com/api/characters/40",
          "https://anapioficeandfire.com/api/characters/41",
          "https://anapioficeandfire.com/api/characters/42",
          "https://anapioficeandfire.com/api/characters/46",
          "https://anapioficeandfire.com/api/characters/54",
          "https://anapioficeandfire.com/api/characters/56",
          "https://anapioficeandfire.com/api/characters/57",
          "https://anapioficeandfire.com/api/characters/60",
          "https://anapioficeandfire.com/api/characters/61",
          "https://anapioficeandfire.com/api/characters/62",
          "https://anapioficeandfire.com/api/characters/66",
          "https://anapioficeandfire.com/api/characters/67",
          "https://anapioficeandfire.com/api/characters/69",
          "https://anapioficeandfire.com/api/characters/79",
          "https://anapioficeandfire.com/api/characters/89",
          "https://anapioficeandfire.com/api/characters/107",
          "https://anapioficeandfire.com/api/characters/115",
          "https://anapioficeandfire.com/api/characters/116",
          "https://anapioficeandfire.com/api/characters/120",
          "https://anapioficeandfire.com/api/characters/125",
          "https://anapioficeandfire.com/api/characters/128",
          "https://anapioficeandfire.com/api/characters/129",
          "https://anapioficeandfire.com/api/characters/130",
          "https://anapioficeandfire.com/api/characters/135",
          "https://anapioficeandfire.com/api/characters/137",
          "https://anapioficeandfire.com/api/characters/142",
          "https://anapioficeandfire.com/api/characters/147",
          "https://anapioficeandfire.com/api/characters/149",
          "https://anapioficeandfire.com/api/characters/150",
          "https://anapioficeandfire.com/api/characters/151",
          "https://anapioficeandfire.com/api/characters/160",
          "https://anapioficeandfire.com/api/characters/164",
          "https://anapioficeandfire.com/api/characters/168",
          "https://anapioficeandfire.com/api/characters/171",
          "https://anapioficeandfire.com/api/characters/181",
          "https://anapioficeandfire.com/api/characters/190",
          "https://anapioficeandfire.com/api/characters/194",
          "https://anapioficeandfire.com/api/characters/198",
          "https://anapioficeandfire.com/api/characters/202",
          "https://anapioficeandfire.com/api/characters/203",
          "https://anapioficeandfire.com/api/characters/206",
          "https://anapioficeandfire.com/api/characters/209",
          "https://anapioficeandfire.com/api/characters/211",
          "https://anapioficeandfire.com/api/characters/213",
          "https://anapioficeandfire.com/api/characters/217",
          "https://anapioficeandfire.com/api/characters/220",
          "https://anapioficeandfire.com/api/characters/223",
          "https://anapioficeandfire.com/api/characters/225",
          "https://anapioficeandfire.com/api/characters/235",
          "https://anapioficeandfire.com/api/characters/238",
          "https://anapioficeandfire.com/api/characters/245",
          "https://anapioficeandfire.com/api/characters/259",
          "https://anapioficeandfire.com/api/characters/264",
          "https://anapioficeandfire.com/api/characters/273",
          "https://anapioficeandfire.com/api/characters/274",
          "https://anapioficeandfire.com/api/characters/291",
          "https://anapioficeandfire.com/api/characters/292",
          "https://anapioficeandfire.com/api/characters/293",
          "https://anapioficeandfire.com/api/characters/294",
          "https://anapioficeandfire.com/api/characters/303",
          "https://anapioficeandfire.com/api/characters/306",
          "https://anapioficeandfire.com/api/characters/313",
          "https://anapioficeandfire.com/api/characters/315",
          "https://anapioficeandfire.com/api/characters/325",
          "https://anapioficeandfire.com/api/characters/326",
          "https://anapioficeandfire.com/api/characters/327",
          "https://anapioficeandfire.com/api/characters/338",
          "https://anapioficeandfire.com/api/characters/346",
          "https://anapioficeandfire.com/api/characters/347",
          "https://anapioficeandfire.com/api/characters/348",
          "https://anapioficeandfire.com/api/characters/361",
          "https://anapioficeandfire.com/api/characters/368",
          "https://anapioficeandfire.com/api/characters/377",
          "https://anapioficeandfire.com/api/characters/379",
          "https://anapioficeandfire.com/api/characters/380",
          "https://anapioficeandfire.com/api/characters/384",
          "https://anapioficeandfire.com/api/characters/385",
          "https://anapioficeandfire.com/api/characters/393",
          "https://anapioficeandfire.com/api/characters/394",
          "https://anapioficeandfire.com/api/characters/397",
          "https://anapioficeandfire.com/api/characters/400",
          "https://anapioficeandfire.com/api/characters/401",
          "https://anapioficeandfire.com/api/characters/405",
          "https://anapioficeandfire.com/api/characters/408",
          "https://anapioficeandfire.com/api/characters/413",
          "https://anapioficeandfire.com/api/characters/415",
          "https://anapioficeandfire.com/api/characters/418",
          "https://anapioficeandfire.com/api/characters/421",
          "https://anapioficeandfire.com/api/characters/427",
          "https://anapioficeandfire.com/api/characters/435",
          "https://anapioficeandfire.com/api/characters/439",
          "https://anapioficeandfire.com/api/characters/458",
          "https://anapioficeandfire.com/api/characters/461",
          "https://anapioficeandfire.com/api/characters/463",
          "https://anapioficeandfire.com/api/characters/466",
          "https://anapioficeandfire.com/api/characters/467",
          "https://anapioficeandfire.com/api/characters/475",
          "https://anapioficeandfire.com/api/characters/476",
          "https://anapioficeandfire.com/api/characters/484",
          "https://anapioficeandfire.com/api/characters/487",
          "https://anapioficeandfire.com/api/characters/490",
          "https://anapioficeandfire.com/api/characters/494",
          "https://anapioficeandfire.com/api/characters/496",
          "https://anapioficeandfire.com/api/characters/498",
          "https://anapioficeandfire.com/api/characters/501",
          "https://anapioficeandfire.com/api/characters/503",
          "https://anapioficeandfire.com/api/characters/506",
          "https://anapioficeandfire.com/api/characters/508",
          "https://anapioficeandfire.com/api/characters/519",
          "https://anapioficeandfire.com/api/characters/521",
          "https://anapioficeandfire.com/api/characters/526",
          "https://anapioficeandfire.com/api/characters/527",
          "https://anapioficeandfire.com/api/characters/529",
          "https://anapioficeandfire.com/api/characters/531",
          "https://anapioficeandfire.com/api/characters/532",
          "https://anapioficeandfire.com/api/characters/533",
          "https://anapioficeandfire.com/api/characters/535",
          "https://anapioficeandfire.com/api/characters/536",
          "https://anapioficeandfire.com/api/characters/539",
          "https://anapioficeandfire.com/api/characters/547",
          "https://anapioficeandfire.com/api/characters/557",
          "https://anapioficeandfire.com/api/characters/558",
          "https://anapioficeandfire.com/api/characters/562",
          "https://anapioficeandfire.com/api/characters/565",
          "https://anapioficeandfire.com/api/characters/572",
          "https://anapioficeandfire.com/api/characters/584",
          "https://anapioficeandfire.com/api/characters/585",
          "https://anapioficeandfire.com/api/characters/586",
          "https://anapioficeandfire.com/api/characters/588",
          "https://anapioficeandfire.com/api/characters/595",
          "https://anapioficeandfire.com/api/characters/600",
          "https://anapioficeandfire.com/api/characters/604",
          "https://anapioficeandfire.com/api/characters/605",
          "https://anapioficeandfire.com/api/characters/613",
          "https://anapioficeandfire.com/api/characters/615",
          "https://anapioficeandfire.com/api/characters/622",
          "https://anapioficeandfire.com/api/characters/631",
          "https://anapioficeandfire.com/api/characters/632",
          "https://anapioficeandfire.com/api/characters/635",
          "https://anapioficeandfire.com/api/characters/640",
          "https://anapioficeandfire.com/api/characters/649",
          "https://anapioficeandfire.com/api/characters/650",
          "https://anapioficeandfire.com/api/characters/651",
          "https://anapioficeandfire.com/api/characters/672",
          "https://anapioficeandfire.com/api/characters/677",
          "https://anapioficeandfire.com/api/characters/688",
          "https://anapioficeandfire.com/api/characters/691",
          "https://anapioficeandfire.com/api/characters/692",
          "https://anapioficeandfire.com/api/characters/694",
          "https://anapioficeandfire.com/api/characters/695",
          "https://anapioficeandfire.com/api/characters/701",
          "https://anapioficeandfire.com/api/characters/709",
          "https://anapioficeandfire.com/api/characters/714",
          "https://anapioficeandfire.com/api/characters/718",
          "https://anapioficeandfire.com/api/characters/721",
          "https://anapioficeandfire.com/api/characters/724",
          "https://anapioficeandfire.com/api/characters/725",
          "https://anapioficeandfire.com/api/characters/731",
          "https://anapioficeandfire.com/api/characters/734",
          "https://anapioficeandfire.com/api/characters/749",
          "https://anapioficeandfire.com/api/characters/751",
          "https://anapioficeandfire.com/api/characters/752",
          "https://anapioficeandfire.com/api/characters/754",
          "https://anapioficeandfire.com/api/characters/755",
          "https://anapioficeandfire.com/api/characters/759",
          "https://anapioficeandfire.com/api/characters/766",
          "https://anapioficeandfire.com/api/characters/768",
          "https://anapioficeandfire.com/api/characters/775",
          "https://anapioficeandfire.com/api/characters/778",
          "https://anapioficeandfire.com/api/characters/779",
          "https://anapioficeandfire.com/api/characters/782",
          "https://anapioficeandfire.com/api/characters/784",
          "https://anapioficeandfire.com/api/characters/786",
          "https://anapioficeandfire.com/api/characters/797",
          "https://anapioficeandfire.com/api/characters/805",
          "https://anapioficeandfire.com/api/characters/806",
          "https://anapioficeandfire.com/api/characters/814",
          "https://anapioficeandfire.com/api/characters/815",
          "https://anapioficeandfire.com/api/characters/820",
          "https://anapioficeandfire.com/api/characters/823",
          "https://anapioficeandfire.com/api/characters/827",
          "https://anapioficeandfire.com/api/characters/828",
          "https://anapioficeandfire.com/api/characters/829",
          "https://anapioficeandfire.com/api/characters/832",
          "https://anapioficeandfire.com/api/characters/837",
          "https://anapioficeandfire.com/api/characters/844",
          "https://anapioficeandfire.com/api/characters/850",
          "https://anapioficeandfire.com/api/characters/852",
          "https://anapioficeandfire.com/api/characters/860",
          "https://anapioficeandfire.com/api/characters/862",
          "https://anapioficeandfire.com/api/characters/867",
          "https://anapioficeandfire.com/api/characters/869",
          "https://anapioficeandfire.com/api/characters/876",
          "https://anapioficeandfire.com/api/characters/884",
          "https://anapioficeandfire.com/api/characters/886",
          "https://anapioficeandfire.com/api/characters/887",
          "https://anapioficeandfire.com/api/characters/891",
          "https://anapioficeandfire.com/api/characters/892",
          "https://anapioficeandfire.com/api/characters/894",
          "https://anapioficeandfire.com/api/characters/901",
          "https://anapioficeandfire.com/api/characters/903",
          "https://anapioficeandfire.com/api/characters/909",
          "https://anapioficeandfire.com/api/characters/912",
          "https://anapioficeandfire.com/api/characters/913",
          "https://anapioficeandfire.com/api/characters/916",
          "https://anapioficeandfire.com/api/characters/933",
          "https://anapioficeandfire.com/api/characters/945",
          "https://anapioficeandfire.com/api/characters/954",
          "https://anapioficeandfire.com/api/characters/955",
          "https://anapioficeandfire.com/api/characters/969",
          "https://anapioficeandfire.com/api/characters/972",
          "https://anapioficeandfire.com/api/characters/975",
          "https://anapioficeandfire.com/api/characters/983",
          "https://anapioficeandfire.com/api/characters/984",
          "https://anapioficeandfire.com/api/characters/994",
          "https://anapioficeandfire.com/api/characters/1010",
          "https://anapioficeandfire.com/api/characters/1017",
          "https://anapioficeandfire.com/api/characters/1022",
          "https://anapioficeandfire.com/api/characters/1023",
          "https://anapioficeandfire.com/api/characters/1025",
          "https://anapioficeandfire.com/api/characters/1029",
          "https://anapioficeandfire.com/api/characters/1033",
          "https://anapioficeandfire.com/api/characters/1034",
          "https://anapioficeandfire.com/api/characters/1043",
          "https://anapioficeandfire.com/api/characters/1044",
          "https://anapioficeandfire.com/api/characters/1049",
          "https://anapioficeandfire.com/api/characters/1051",
          "https://anapioficeandfire.com/api/characters/1055",
          "https://anapioficeandfire.com/api/characters/1063",
          "https://anapioficeandfire.com/api/characters/1068",
          "https://anapioficeandfire.com/api/characters/1069",
          "https://anapioficeandfire.com/api/characters/1072",
          "https://anapioficeandfire.com/api/characters/1074",
          "https://anapioficeandfire.com/api/characters/1076",
          "https://anapioficeandfire.com/api/characters/1077",
          "https://anapioficeandfire.com/api/characters/1079",
          "https://anapioficeandfire.com/api/characters/1080",
          "https://anapioficeandfire.com/api/characters/1089",
          "https://anapioficeandfire.com/api/characters/1090",
          "https://anapioficeandfire.com/api/characters/1091",
          "https://anapioficeandfire.com/api/characters/1093",
          "https://anapioficeandfire.com/api/characters/1096",
          "https://anapioficeandfire.com/api/characters/1104",
          "https://anapioficeandfire.com/api/characters/1106",
          "https://anapioficeandfire.com/api/characters/1107",
          "https://anapioficeandfire.com/api/characters/1110",
          "https://anapioficeandfire.com/api/characters/1113",
          "https://anapioficeandfire.com/api/characters/1114",
          "https://anapioficeandfire.com/api/characters/1116",
          "https://anapioficeandfire.com/api/characters/1120",
          "https://anapioficeandfire.com/api/characters/1122",
          "https://anapioficeandfire.com/api/characters/1124",
          "https://anapioficeandfire.com/api/characters/1131",
          "https://anapioficeandfire.com/api/characters/1132",
          "https://anapioficeandfire.com/api/characters/1140",
          "https://anapioficeandfire.com/api/characters/1142",
          "https://anapioficeandfire.com/api/characters/1147",
          "https://anapioficeandfire.com/api/characters/1152",
          "https://anapioficeandfire.com/api/characters/1158",
          "https://anapioficeandfire.com/api/characters/1165",
          "https://anapioficeandfire.com/api/characters/1166",
          "https://anapioficeandfire.com/api/characters/1178",
          "https://anapioficeandfire.com/api/characters/1188",
          "https://anapioficeandfire.com/api/characters/1193",
          "https://anapioficeandfire.com/api/characters/1214",
          "https://anapioficeandfire.com/api/characters/1219",
          "https://anapioficeandfire.com/api/characters/1228",
          "https://anapioficeandfire.com/api/characters/1245",
          "https://anapioficeandfire.com/api/characters/1247",
          "https://anapioficeandfire.com/api/characters/1253",
          "https://anapioficeandfire.com/api/characters/1260",
          "https://anapioficeandfire.com/api/characters/1262",
          "https://anapioficeandfire.com/api/characters/1265",
          "https://anapioficeandfire.com/api/characters/1266",
          "https://anapioficeandfire.com/api/characters/1267",
          "https://anapioficeandfire.com/api/characters/1268",
          "https://anapioficeandfire.com/api/characters/1269",
          "https://anapioficeandfire.com/api/characters/1275",
          "https://anapioficeandfire.com/api/characters/1277",
          "https://anapioficeandfire.com/api/characters/1278",
          "https://anapioficeandfire.com/api/characters/1280",
          "https://anapioficeandfire.com/api/characters/1282",
          "https://anapioficeandfire.com/api/characters/1284",
          "https://anapioficeandfire.com/api/characters/1289",
          "https://anapioficeandfire.com/api/characters/1296",
          "https://anapioficeandfire.com/api/characters/1299",
          "https://anapioficeandfire.com/api/characters/1304",
          "https://anapioficeandfire.com/api/characters/1317",
          "https://anapioficeandfire.com/api/characters/1326",
          "https://anapioficeandfire.com/api/characters/1333",
          "https://anapioficeandfire.com/api/characters/1335",
          "https://anapioficeandfire.com/api/characters/1336",
          "https://anapioficeandfire.com/api/characters/1340",
          "https://anapioficeandfire.com/api/characters/1346",
          "https://anapioficeandfire.com/api/characters/1352",
          "https://anapioficeandfire.com/api/characters/1355",
          "https://anapioficeandfire.com/api/characters/1373",
          "https://anapioficeandfire.com/api/characters/1383",
          "https://anapioficeandfire.com/api/characters/1389",
          "https://anapioficeandfire.com/api/characters/1396",
          "https://anapioficeandfire.com/api/characters/1409",
          "https://anapioficeandfire.com/api/characters/1410",
          "https://anapioficeandfire.com/api/characters/1418",
          "https://anapioficeandfire.com/api/characters/1430",
          "https://anapioficeandfire.com/api/characters/1434",
          "https://anapioficeandfire.com/api/characters/1442",
          "https://anapioficeandfire.com/api/characters/1444",
          "https://anapioficeandfire.com/api/characters/1453",
          "https://anapioficeandfire.com/api/characters/1455",
          "https://anapioficeandfire.com/api/characters/1456",
          "https://anapioficeandfire.com/api/characters/1463",
          "https://anapioficeandfire.com/api/characters/1466",
          "https://anapioficeandfire.com/api/characters/1468",
          "https://anapioficeandfire.com/api/characters/1470",
          "https://anapioficeandfire.com/api/characters/1488",
          "https://anapioficeandfire.com/api/characters/1499",
          "https://anapioficeandfire.com/api/characters/1502",
          "https://anapioficeandfire.com/api/characters/1515",
          "https://anapioficeandfire.com/api/characters/1520",
          "https://anapioficeandfire.com/api/characters/1523",
          "https://anapioficeandfire.com/api/characters/1526",
          "https://anapioficeandfire.com/api/characters/1529",
          "https://anapioficeandfire.com/api/characters/1530",
          "https://anapioficeandfire.com/api/characters/1531",
          "https://anapioficeandfire.com/api/characters/1540",
          "https://anapioficeandfire.com/api/characters/1547",
          "https://anapioficeandfire.com/api/characters/1548",
          "https://anapioficeandfire.com/api/characters/1549",
          "https://anapioficeandfire.com/api/characters/1551",
          "https://anapioficeandfire.com/api/characters/1559",
          "https://anapioficeandfire.com/api/characters/1560",
          "https://anapioficeandfire.com/api/characters/1565",
          "https://anapioficeandfire.com/api/characters/1566",
          "https://anapioficeandfire.com/api/characters/1568",
          "https://anapioficeandfire.com/api/characters/1570",
          "https://anapioficeandfire.com/api/characters/1573",
          "https://anapioficeandfire.com/api/characters/1585",
          "https://anapioficeandfire.com/api/characters/1596",
          "https://anapioficeandfire.com/api/characters/1602",
          "https://anapioficeandfire.com/api/characters/1620",
          "https://anapioficeandfire.com/api/characters/1624",
          "https://anapioficeandfire.com/api/characters/1627",
          "https://anapioficeandfire.com/api/characters/1631",
          "https://anapioficeandfire.com/api/characters/1649",
          "https://anapioficeandfire.com/api/characters/1650",
          "https://anapioficeandfire.com/api/characters/1660",
          "https://anapioficeandfire.com/api/characters/1662",
          "https://anapioficeandfire.com/api/characters/1665",
          "https://anapioficeandfire.com/api/characters/1666",
          "https://anapioficeandfire.com/api/characters/1670",
          "https://anapioficeandfire.com/api/characters/1674",
          "https://anapioficeandfire.com/api/characters/1675",
          "https://anapioficeandfire.com/api/characters/1677",
          "https://anapioficeandfire.com/api/characters/1682",
          "https://anapioficeandfire.com/api/characters/1697",
          "https://anapioficeandfire.com/api/characters/1706",
          "https://anapioficeandfire.com/api/characters/1708",
          "https://anapioficeandfire.com/api/characters/1710",
          "https://anapioficeandfire.com/api/characters/1713",
          "https://anapioficeandfire.com/api/characters/1715",
          "https://anapioficeandfire.com/api/characters/1717",
          "https://anapioficeandfire.com/api/characters/1721",
          "https://anapioficeandfire.com/api/characters/1724",
          "https://anapioficeandfire.com/api/characters/1725",
          "https://anapioficeandfire.com/api/characters/1727",
          "https://anapioficeandfire.com/api/characters/1741",
          "https://anapioficeandfire.com/api/characters/1742",
          "https://anapioficeandfire.com/api/characters/1749",
          "https://anapioficeandfire.com/api/characters/1755",
          "https://anapioficeandfire.com/api/characters/1770",
          "https://anapioficeandfire.com/api/characters/1772",
          "https://anapioficeandfire.com/api/characters/1787",
          "https://anapioficeandfire.com/api/characters/1790",
          "https://anapioficeandfire.com/api/characters/1802",
          "https://anapioficeandfire.com/api/characters/1815",
          "https://anapioficeandfire.com/api/characters/1816",
          "https://anapioficeandfire.com/api/characters/1826",
          "https://anapioficeandfire.com/api/characters/1837",
          "https://anapioficeandfire.com/api/characters/1838",
          "https://anapioficeandfire.com/api/characters/1840",
          "https://anapioficeandfire.com/api/characters/1843",
          "https://anapioficeandfire.com/api/characters/1855",
          "https://anapioficeandfire.com/api/characters/1856",
          "https://anapioficeandfire.com/api/characters/1861",
          "https://anapioficeandfire.com/api/characters/1873",
          "https://anapioficeandfire.com/api/characters/1874",
          "https://anapioficeandfire.com/api/characters/1875",
          "https://anapioficeandfire.com/api/characters/1880",
          "https://anapioficeandfire.com/api/characters/1882",
          "https://anapioficeandfire.com/api/characters/1900",
          "https://anapioficeandfire.com/api/characters/1909",
          "https://anapioficeandfire.com/api/characters/1911",
          "https://anapioficeandfire.com/api/characters/1916",
          "https://anapioficeandfire.com/api/characters/1935",
          "https://anapioficeandfire.com/api/characters/1938",
          "https://anapioficeandfire.com/api/characters/1939",
          "https://anapioficeandfire.com/api/characters/1942",
          "https://anapioficeandfire.com/api/characters/1963",
          "https://anapioficeandfire.com/api/characters/1968",
          "https://anapioficeandfire.com/api/characters/1976",
          "https://anapioficeandfire.com/api/characters/1979",
          "https://anapioficeandfire.com/api/characters/1997",
          "https://anapioficeandfire.com/api/characters/2002",
          "https://anapioficeandfire.com/api/characters/2008",
          "https://anapioficeandfire.com/api/characters/2009",
          "https://anapioficeandfire.com/api/characters/2013",
          "https://anapioficeandfire.com/api/characters/2014",
          "https://anapioficeandfire.com/api/characters/2020",
          "https://anapioficeandfire.com/api/characters/2025",
          "https://anapioficeandfire.com/api/characters/2029",
          "https://anapioficeandfire.com/api/characters/2044",
          "https://anapioficeandfire.com/api/characters/2045",
          "https://anapioficeandfire.com/api/characters/2047",
          "https://anapioficeandfire.com/api/characters/2051",
          "https://anapioficeandfire.com/api/characters/2059",
          "https://anapioficeandfire.com/api/characters/2067",
          "https://anapioficeandfire.com/api/characters/2068",
          "https://anapioficeandfire.com/api/characters/2069",
          "https://anapioficeandfire.com/api/characters/2071",
          "https://anapioficeandfire.com/api/characters/2073",
          "https://anapioficeandfire.com/api/characters/2076",
          "https://anapioficeandfire.com/api/characters/2089",
          "https://anapioficeandfire.com/api/characters/2114",
          "https://anapioficeandfire.com/api/characters/2119",
          "https://anapioficeandfire.com/api/characters/2121"
        ];




        foreach ($arr as $key => $val ){

            $num = explode('characters/', $val)[1];
            $content = file_get_contents($val);

            Storage::put('public/books/characters' . $num . '.json', json_encode(json_decode($content,true)) );

            sleep(3);
        }
}




    public function createCharacter($num = 100)
    {

      $res = [];
      $characters = config('characters');
      $i=0;
      foreach ($characters as $key => $val ){

        $num = explode('characters/', $val)[1];
        $data = Storage::get('public/books/characters' . $num . '.json');
        $arr = json_decode($data,true);
       
          if(isset($arr['name'])){
            $res[]=[
              'name'=>$arr['name'],
              'gender'=>$arr['gender'],
              'culture'=>$arr['culture'],
              'born'=>$arr['born'],
              'died'=>$arr['died'],
              'titles'=>$arr['titles'],
              'aliases'=>$arr['aliases'],
              'tvSeries'=>$arr['tvSeries'],
              'playedBy'=>$arr['playedBy']
            ];
            $i++;
          }
          if($i >=$num){
              break;
          }

           
      }
      Storage::put('public/books/characters_new.json', json_encode($res) );
      # code...
    }
}
