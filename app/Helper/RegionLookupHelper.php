<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 15/05/20
 * Time: 7:33
 */

namespace App\Helper;


class RegionLookupHelper
{
    const PROVINCE = array (
        0 =>
            array (
                'id' => '11',
                'name' => 'ACEH',
                'alt_name' => 'ACEH',
                'latitude' => 4.36855,
                'longitude' => 97.0253,
            ),
        1 =>
            array (
                'id' => '12',
                'name' => 'SUMATERA UTARA',
                'alt_name' => 'SUMATERA UTARA',
                'latitude' => 2.19235,
                'longitude' => 99.38122,
            ),
        2 =>
            array (
                'id' => '13',
                'name' => 'SUMATERA BARAT',
                'alt_name' => 'SUMATERA BARAT',
                'latitude' => -1.34225,
                'longitude' => 100.0761,
            ),
        3 =>
            array (
                'id' => '14',
                'name' => 'RIAU',
                'alt_name' => 'RIAU',
                'latitude' => 0.50041,
                'longitude' => 101.54758,
            ),
        4 =>
            array (
                'id' => '15',
                'name' => 'JAMBI',
                'alt_name' => 'JAMBI',
                'latitude' => -1.61157,
                'longitude' => 102.7797,
            ),
        5 =>
            array (
                'id' => '16',
                'name' => 'SUMATERA SELATAN',
                'alt_name' => 'SUMATERA SELATAN',
                'latitude' => -3.12668,
                'longitude' => 104.09306,
            ),
        6 =>
            array (
                'id' => '17',
                'name' => 'BENGKULU',
                'alt_name' => 'BENGKULU',
                'latitude' => -3.51868,
                'longitude' => 102.53598,
            ),
        7 =>
            array (
                'id' => '18',
                'name' => 'LAMPUNG',
                'alt_name' => 'LAMPUNG',
                'latitude' => -4.8555,
                'longitude' => 105.0273,
            ),
        8 =>
            array (
                'id' => '19',
                'name' => 'KEPULAUAN BANGKA BELITUNG',
                'alt_name' => 'KEPULAUAN BANGKA BELITUNG',
                'latitude' => -2.75775,
                'longitude' => 107.58394,
            ),
        9 =>
            array (
                'id' => '21',
                'name' => 'KEPULAUAN RIAU',
                'alt_name' => 'KEPULAUAN RIAU',
                'latitude' => -0.15478,
                'longitude' => 104.58037,
            ),
        10 =>
            array (
                'id' => '31',
                'name' => 'DKI JAKARTA',
                'alt_name' => 'DKI JAKARTA',
                'latitude' => 6.1745,
                'longitude' => 106.8227,
            ),
        11 =>
            array (
                'id' => '32',
                'name' => 'JAWA BARAT',
                'alt_name' => 'JAWA BARAT',
                'latitude' => -6.88917,
                'longitude' => 107.64047,
            ),
        12 =>
            array (
                'id' => '33',
                'name' => 'JAWA TENGAH',
                'alt_name' => 'JAWA TENGAH',
                'latitude' => -7.30324,
                'longitude' => 110.00441,
            ),
        13 =>
            array (
                'id' => '34',
                'name' => 'DI YOGYAKARTA',
                'alt_name' => 'DI YOGYAKARTA',
                'latitude' => 7.7956,
                'longitude' => 110.3695,
            ),
        14 =>
            array (
                'id' => '35',
                'name' => 'JAWA TIMUR',
                'alt_name' => 'JAWA TIMUR',
                'latitude' => -6.96851,
                'longitude' => 113.98005,
            ),
        15 =>
            array (
                'id' => '36',
                'name' => 'BANTEN',
                'alt_name' => 'BANTEN',
                'latitude' => -6.44538,
                'longitude' => 106.13756,
            ),
        16 =>
            array (
                'id' => '51',
                'name' => 'BALI',
                'alt_name' => 'BALI',
                'latitude' => -8.23566,
                'longitude' => 115.12239,
            ),
        17 =>
            array (
                'id' => '52',
                'name' => 'NUSA TENGGARA BARAT',
                'alt_name' => 'NUSA TENGGARA BARAT',
                'latitude' => -8.12179,
                'longitude' => 117.63696,
            ),
        18 =>
            array (
                'id' => '53',
                'name' => 'NUSA TENGGARA TIMUR',
                'alt_name' => 'NUSA TENGGARA TIMUR',
                'latitude' => -8.56568,
                'longitude' => 120.69786,
            ),
        19 =>
            array (
                'id' => '61',
                'name' => 'KALIMANTAN BARAT',
                'alt_name' => 'KALIMANTAN BARAT',
                'latitude' => -0.13224,
                'longitude' => 111.09689,
            ),
        20 =>
            array (
                'id' => '62',
                'name' => 'KALIMANTAN TENGAH',
                'alt_name' => 'KALIMANTAN TENGAH',
                'latitude' => -1.49958,
                'longitude' => 113.29033,
            ),
        21 =>
            array (
                'id' => '63',
                'name' => 'KALIMANTAN SELATAN',
                'alt_name' => 'KALIMANTAN SELATAN',
                'latitude' => -2.94348,
                'longitude' => 115.37565,
            ),
        22 =>
            array (
                'id' => '64',
                'name' => 'KALIMANTAN TIMUR',
                'alt_name' => 'KALIMANTAN TIMUR',
                'latitude' => 0.78844,
                'longitude' => 116.242,
            ),
        23 =>
            array (
                'id' => '65',
                'name' => 'KALIMANTAN UTARA',
                'alt_name' => 'KALIMANTAN UTARA',
                'latitude' => 2.72594,
                'longitude' => 116.911,
            ),
        24 =>
            array (
                'id' => '71',
                'name' => 'SULAWESI UTARA',
                'alt_name' => 'SULAWESI UTARA',
                'latitude' => 0.65557,
                'longitude' => 124.09015,
            ),
        25 =>
            array (
                'id' => '72',
                'name' => 'SULAWESI TENGAH',
                'alt_name' => 'SULAWESI TENGAH',
                'latitude' => -1.69378,
                'longitude' => 120.80886,
            ),
        26 =>
            array (
                'id' => '73',
                'name' => 'SULAWESI SELATAN',
                'alt_name' => 'SULAWESI SELATAN',
                'latitude' => -3.64467,
                'longitude' => 119.94719,
            ),
        27 =>
            array (
                'id' => '74',
                'name' => 'SULAWESI TENGGARA',
                'alt_name' => 'SULAWESI TENGGARA',
                'latitude' => -3.54912,
                'longitude' => 121.72796,
            ),
        28 =>
            array (
                'id' => '75',
                'name' => 'GORONTALO',
                'alt_name' => 'GORONTALO',
                'latitude' => 0.71862,
                'longitude' => 122.45559,
            ),
        29 =>
            array (
                'id' => '76',
                'name' => 'SULAWESI BARAT',
                'alt_name' => 'SULAWESI BARAT',
                'latitude' => -2.49745,
                'longitude' => 119.3919,
            ),
        30 =>
            array (
                'id' => '81',
                'name' => 'MALUKU',
                'alt_name' => 'MALUKU',
                'latitude' => -3.11884,
                'longitude' => 129.42078,
            ),
        31 =>
            array (
                'id' => '82',
                'name' => 'MALUKU UTARA',
                'alt_name' => 'MALUKU UTARA',
                'latitude' => 0.63012,
                'longitude' => 127.97202,
            ),
        32 =>
            array (
                'id' => '91',
                'name' => 'PAPUA BARAT',
                'alt_name' => 'PAPUA BARAT',
                'latitude' => -1.38424,
                'longitude' => 132.90253,
            ),
        33 =>
            array (
                'id' => '94',
                'name' => 'PAPUA',
                'alt_name' => 'PAPUA',
                'latitude' => -3.98857,
                'longitude' => 138.34853,
            ),
    );

    const CITY = array (
        0 =>
            array (
                'id' => '1101',
                'province_id' => '11',
                'name' => 'KABUPATEN SIMEULUE',
                'alt_name' => 'KABUPATEN SIMEULUE',
                'latitude' => 2.61667,
                'longitude' => 96.08333,
            ),
        1 =>
            array (
                'id' => '1102',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH SINGKIL',
                'alt_name' => 'KABUPATEN ACEH SINGKIL',
                'latitude' => 2.41667,
                'longitude' => 97.91667,
            ),
        2 =>
            array (
                'id' => '1103',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH SELATAN',
                'alt_name' => 'KABUPATEN ACEH SELATAN',
                'latitude' => 3.16667,
                'longitude' => 97.41667,
            ),
        3 =>
            array (
                'id' => '1104',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH TENGGARA',
                'alt_name' => 'KABUPATEN ACEH TENGGARA',
                'latitude' => 3.36667,
                'longitude' => 97.7,
            ),
        4 =>
            array (
                'id' => '1105',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH TIMUR',
                'alt_name' => 'KABUPATEN ACEH TIMUR',
                'latitude' => 4.63333,
                'longitude' => 97.63333,
            ),
        5 =>
            array (
                'id' => '1106',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH TENGAH',
                'alt_name' => 'KABUPATEN ACEH TENGAH',
                'latitude' => 4.51,
                'longitude' => 96.855,
            ),
        6 =>
            array (
                'id' => '1107',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH BARAT',
                'alt_name' => 'KABUPATEN ACEH BARAT',
                'latitude' => 4.45,
                'longitude' => 96.16667,
            ),
        7 =>
            array (
                'id' => '1108',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH BESAR',
                'alt_name' => 'KABUPATEN ACEH BESAR',
                'latitude' => 5.38333,
                'longitude' => 95.51667,
            ),
        8 =>
            array (
                'id' => '1109',
                'province_id' => '11',
                'name' => 'KABUPATEN PIDIE',
                'alt_name' => 'KABUPATEN PIDIE',
                'latitude' => 5.08,
                'longitude' => 96.11,
            ),
        9 =>
            array (
                'id' => '1110',
                'province_id' => '11',
                'name' => 'KABUPATEN BIREUEN',
                'alt_name' => 'KABUPATEN BIREUEN',
                'latitude' => 5.08333,
                'longitude' => 96.58333,
            ),
        10 =>
            array (
                'id' => '1111',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH UTARA',
                'alt_name' => 'KABUPATEN ACEH UTARA',
                'latitude' => 4.97,
                'longitude' => 97.14,
            ),
        11 =>
            array (
                'id' => '1112',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH BARAT DAYA',
                'alt_name' => 'KABUPATEN ACEH BARAT DAYA',
                'latitude' => 3.83333,
                'longitude' => 96.88333,
            ),
        12 =>
            array (
                'id' => '1113',
                'province_id' => '11',
                'name' => 'KABUPATEN GAYO LUES',
                'alt_name' => 'KABUPATEN GAYO LUES',
                'latitude' => 3.95,
                'longitude' => 97.39,
            ),
        13 =>
            array (
                'id' => '1114',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH TAMIANG',
                'alt_name' => 'KABUPATEN ACEH TAMIANG',
                'latitude' => 4.25,
                'longitude' => 97.96667,
            ),
        14 =>
            array (
                'id' => '1115',
                'province_id' => '11',
                'name' => 'KABUPATEN NAGAN RAYA',
                'alt_name' => 'KABUPATEN NAGAN RAYA',
                'latitude' => 4.16667,
                'longitude' => 96.51667,
            ),
        15 =>
            array (
                'id' => '1116',
                'province_id' => '11',
                'name' => 'KABUPATEN ACEH JAYA',
                'alt_name' => 'KABUPATEN ACEH JAYA',
                'latitude' => 4.86,
                'longitude' => 95.64,
            ),
        16 =>
            array (
                'id' => '1117',
                'province_id' => '11',
                'name' => 'KABUPATEN BENER MERIAH',
                'alt_name' => 'KABUPATEN BENER MERIAH',
                'latitude' => 4.73015,
                'longitude' => 96.86156,
            ),
        17 =>
            array (
                'id' => '1118',
                'province_id' => '11',
                'name' => 'KABUPATEN PIDIE JAYA',
                'alt_name' => 'KABUPATEN PIDIE JAYA',
                'latitude' => 5.15,
                'longitude' => 96.21667,
            ),
        18 =>
            array (
                'id' => '1171',
                'province_id' => '11',
                'name' => 'KOTA BANDA ACEH',
                'alt_name' => 'KOTA BANDA ACEH',
                'latitude' => 5.54167,
                'longitude' => 95.33333,
            ),
        19 =>
            array (
                'id' => '1172',
                'province_id' => '11',
                'name' => 'KOTA SABANG',
                'alt_name' => 'KOTA SABANG',
                'latitude' => 5.82164,
                'longitude' => 95.31086,
            ),
        20 =>
            array (
                'id' => '1173',
                'province_id' => '11',
                'name' => 'KOTA LANGSA',
                'alt_name' => 'KOTA LANGSA',
                'latitude' => 4.47,
                'longitude' => 97.93,
            ),
        21 =>
            array (
                'id' => '1174',
                'province_id' => '11',
                'name' => 'KOTA LHOKSEUMAWE',
                'alt_name' => 'KOTA LHOKSEUMAWE',
                'latitude' => 5.13333,
                'longitude' => 97.06667,
            ),
        22 =>
            array (
                'id' => '1175',
                'province_id' => '11',
                'name' => 'KOTA SUBULUSSALAM',
                'alt_name' => 'KOTA SUBULUSSALAM',
                'latitude' => 2.75,
                'longitude' => 97.93333,
            ),
        23 =>
            array (
                'id' => '1201',
                'province_id' => '12',
                'name' => 'KABUPATEN NIAS',
                'alt_name' => 'KABUPATEN NIAS',
                'latitude' => 1.03333,
                'longitude' => 97.76667,
            ),
        24 =>
            array (
                'id' => '1202',
                'province_id' => '12',
                'name' => 'KABUPATEN MANDAILING NATAL',
                'alt_name' => 'KABUPATEN MANDAILING NATAL',
                'latitude' => 0.78378,
                'longitude' => 99.25495,
            ),
        25 =>
            array (
                'id' => '1203',
                'province_id' => '12',
                'name' => 'KABUPATEN TAPANULI SELATAN',
                'alt_name' => 'KABUPATEN TAPANULI SELATAN',
                'latitude' => 1.51667,
                'longitude' => 99.25,
            ),
        26 =>
            array (
                'id' => '1204',
                'province_id' => '12',
                'name' => 'KABUPATEN TAPANULI TENGAH',
                'alt_name' => 'KABUPATEN TAPANULI TENGAH',
                'latitude' => 1.9,
                'longitude' => 98.66667,
            ),
        27 =>
            array (
                'id' => '1205',
                'province_id' => '12',
                'name' => 'KABUPATEN TAPANULI UTARA',
                'alt_name' => 'KABUPATEN TAPANULI UTARA',
                'latitude' => 2.0028,
                'longitude' => 99.0707,
            ),
        28 =>
            array (
                'id' => '1206',
                'province_id' => '12',
                'name' => 'KABUPATEN TOBA SAMOSIR',
                'alt_name' => 'KABUPATEN TOBA SAMOSIR',
                'latitude' => 2.39793,
                'longitude' => 99.21678,
            ),
        29 =>
            array (
                'id' => '1207',
                'province_id' => '12',
                'name' => 'KABUPATEN LABUHAN BATU',
                'alt_name' => 'KABUPATEN LABUHAN BATU',
                'latitude' => 2.26667,
                'longitude' => 100.1,
            ),
        30 =>
            array (
                'id' => '1208',
                'province_id' => '12',
                'name' => 'KABUPATEN ASAHAN',
                'alt_name' => 'KABUPATEN ASAHAN',
                'latitude' => 2.78333,
                'longitude' => 99.55,
            ),
        31 =>
            array (
                'id' => '1209',
                'province_id' => '12',
                'name' => 'KABUPATEN SIMALUNGUN',
                'alt_name' => 'KABUPATEN SIMALUNGUN',
                'latitude' => 2.9,
                'longitude' => 99,
            ),
        32 =>
            array (
                'id' => '1210',
                'province_id' => '12',
                'name' => 'KABUPATEN DAIRI',
                'alt_name' => 'KABUPATEN DAIRI',
                'latitude' => 2.86667,
                'longitude' => 98.23333,
            ),
        33 =>
            array (
                'id' => '1211',
                'province_id' => '12',
                'name' => 'KABUPATEN KARO',
                'alt_name' => 'KABUPATEN KARO',
                'latitude' => 3.11667,
                'longitude' => 98.3,
            ),
        34 =>
            array (
                'id' => '1212',
                'province_id' => '12',
                'name' => 'KABUPATEN DELI SERDANG',
                'alt_name' => 'KABUPATEN DELI SERDANG',
                'latitude' => 3.41667,
                'longitude' => 98.66667,
            ),
        35 =>
            array (
                'id' => '1213',
                'province_id' => '12',
                'name' => 'KABUPATEN LANGKAT',
                'alt_name' => 'KABUPATEN LANGKAT',
                'latitude' => 3.71667,
                'longitude' => 98.21667,
            ),
        36 =>
            array (
                'id' => '1214',
                'province_id' => '12',
                'name' => 'KABUPATEN NIAS SELATAN',
                'alt_name' => 'KABUPATEN NIAS SELATAN',
                'latitude' => 0.77,
                'longitude' => 97.75,
            ),
        37 =>
            array (
                'id' => '1215',
                'province_id' => '12',
                'name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'alt_name' => 'KABUPATEN HUMBANG HASUNDUTAN',
                'latitude' => 2.26551,
                'longitude' => 98.50376,
            ),
        38 =>
            array (
                'id' => '1216',
                'province_id' => '12',
                'name' => 'KABUPATEN PAKPAK BHARAT',
                'alt_name' => 'KABUPATEN PAKPAK BHARAT',
                'latitude' => 2.56667,
                'longitude' => 98.28333,
            ),
        39 =>
            array (
                'id' => '1217',
                'province_id' => '12',
                'name' => 'KABUPATEN SAMOSIR',
                'alt_name' => 'KABUPATEN SAMOSIR',
                'latitude' => 2.64025,
                'longitude' => 98.71525,
            ),
        40 =>
            array (
                'id' => '1218',
                'province_id' => '12',
                'name' => 'KABUPATEN SERDANG BEDAGAI',
                'alt_name' => 'KABUPATEN SERDANG BEDAGAI',
                'latitude' => 3.36667,
                'longitude' => 99.03333,
            ),
        41 =>
            array (
                'id' => '1219',
                'province_id' => '12',
                'name' => 'KABUPATEN BATU BARA',
                'alt_name' => 'KABUPATEN BATU BARA',
                'latitude' => 3.16166,
                'longitude' => 99.52652,
            ),
        42 =>
            array (
                'id' => '1220',
                'province_id' => '12',
                'name' => 'KABUPATEN PADANG LAWAS UTARA',
                'alt_name' => 'KABUPATEN PADANG LAWAS UTARA',
                'latitude' => 1.46011,
                'longitude' => 99.67346,
            ),
        43 =>
            array (
                'id' => '1221',
                'province_id' => '12',
                'name' => 'KABUPATEN PADANG LAWAS',
                'alt_name' => 'KABUPATEN PADANG LAWAS',
                'latitude' => 1.44684,
                'longitude' => 99.99207,
            ),
        44 =>
            array (
                'id' => '1222',
                'province_id' => '12',
                'name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'alt_name' => 'KABUPATEN LABUHAN BATU SELATAN',
                'latitude' => 1.983,
                'longitude' => 100.0976,
            ),
        45 =>
            array (
                'id' => '1223',
                'province_id' => '12',
                'name' => 'KABUPATEN LABUHAN BATU UTARA',
                'alt_name' => 'KABUPATEN LABUHAN BATU UTARA',
                'latitude' => 2.33349,
                'longitude' => 99.63776,
            ),
        46 =>
            array (
                'id' => '1224',
                'province_id' => '12',
                'name' => 'KABUPATEN NIAS UTARA',
                'alt_name' => 'KABUPATEN NIAS UTARA',
                'latitude' => 1.33037,
                'longitude' => 97.31964,
            ),
        47 =>
            array (
                'id' => '1225',
                'province_id' => '12',
                'name' => 'KABUPATEN NIAS BARAT',
                'alt_name' => 'KABUPATEN NIAS BARAT',
                'latitude' => 1.05966,
                'longitude' => 97.58606,
            ),
        48 =>
            array (
                'id' => '1271',
                'province_id' => '12',
                'name' => 'KOTA SIBOLGA',
                'alt_name' => 'KOTA SIBOLGA',
                'latitude' => 1.73333,
                'longitude' => 98.8,
            ),
        49 =>
            array (
                'id' => '1272',
                'province_id' => '12',
                'name' => 'KOTA TANJUNG BALAI',
                'alt_name' => 'KOTA TANJUNG BALAI',
                'latitude' => 2.95833,
                'longitude' => 99.79167,
            ),
        50 =>
            array (
                'id' => '1273',
                'province_id' => '12',
                'name' => 'KOTA PEMATANG SIANTAR',
                'alt_name' => 'KOTA PEMATANG SIANTAR',
                'latitude' => 2.96667,
                'longitude' => 99.05,
            ),
        51 =>
            array (
                'id' => '1274',
                'province_id' => '12',
                'name' => 'KOTA TEBING TINGGI',
                'alt_name' => 'KOTA TEBING TINGGI',
                'latitude' => 3.325,
                'longitude' => 99.14167,
            ),
        52 =>
            array (
                'id' => '1275',
                'province_id' => '12',
                'name' => 'KOTA MEDAN',
                'alt_name' => 'KOTA MEDAN',
                'latitude' => 3.65,
                'longitude' => 98.66667,
            ),
        53 =>
            array (
                'id' => '1276',
                'province_id' => '12',
                'name' => 'KOTA BINJAI',
                'alt_name' => 'KOTA BINJAI',
                'latitude' => 3.8,
                'longitude' => 108.23333,
            ),
        54 =>
            array (
                'id' => '1277',
                'province_id' => '12',
                'name' => 'KOTA PADANG SIDEMPUAN',
                'alt_name' => 'KOTA PADANG SIDEMPUAN',
                'latitude' => 1.37375,
                'longitude' => 99.26843,
            ),
        55 =>
            array (
                'id' => '1278',
                'province_id' => '12',
                'name' => 'KOTA GUNUNGSITOLI',
                'alt_name' => 'KOTA GUNUNGSITOLI',
                'latitude' => 1.32731,
                'longitude' => 97.55018,
            ),
        56 =>
            array (
                'id' => '1301',
                'province_id' => '13',
                'name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'alt_name' => 'KABUPATEN KEPULAUAN MENTAWAI',
                'latitude' => 1.98917,
                'longitude' => 99.51889,
            ),
        57 =>
            array (
                'id' => '1302',
                'province_id' => '13',
                'name' => 'KABUPATEN PESISIR SELATAN',
                'alt_name' => 'KABUPATEN PESISIR SELATAN',
                'latitude' => -1.58333,
                'longitude' => 100.85,
            ),
        58 =>
            array (
                'id' => '1303',
                'province_id' => '13',
                'name' => 'KABUPATEN SOLOK',
                'alt_name' => 'KABUPATEN SOLOK',
                'latitude' => -0.96667,
                'longitude' => 100.81667,
            ),
        59 =>
            array (
                'id' => '1304',
                'province_id' => '13',
                'name' => 'KABUPATEN SIJUNJUNG',
                'alt_name' => 'KABUPATEN SIJUNJUNG',
                'latitude' => -1.1827,
                'longitude' => 101.6056,
            ),
        60 =>
            array (
                'id' => '1305',
                'province_id' => '13',
                'name' => 'KABUPATEN TANAH DATAR',
                'alt_name' => 'KABUPATEN TANAH DATAR',
                'latitude' => -0.4555,
                'longitude' => 100.5771,
            ),
        61 =>
            array (
                'id' => '1306',
                'province_id' => '13',
                'name' => 'KABUPATEN PADANG PARIAMAN',
                'alt_name' => 'KABUPATEN PADANG PARIAMAN',
                'latitude' => -0.6,
                'longitude' => 100.28333,
            ),
        62 =>
            array (
                'id' => '1307',
                'province_id' => '13',
                'name' => 'KABUPATEN AGAM',
                'alt_name' => 'KABUPATEN AGAM',
                'latitude' => -0.25,
                'longitude' => 100.16667,
            ),
        63 =>
            array (
                'id' => '1308',
                'province_id' => '13',
                'name' => 'KABUPATEN LIMA PULUH KOTA',
                'alt_name' => 'KABUPATEN LIMA PULUH KOTA',
                'latitude' => -0.0168,
                'longitude' => 100.5872,
            ),
        64 =>
            array (
                'id' => '1309',
                'province_id' => '13',
                'name' => 'KABUPATEN PASAMAN',
                'alt_name' => 'KABUPATEN PASAMAN',
                'latitude' => 0.42503,
                'longitude' => 99.94606,
            ),
        65 =>
            array (
                'id' => '1310',
                'province_id' => '13',
                'name' => 'KABUPATEN SOLOK SELATAN',
                'alt_name' => 'KABUPATEN SOLOK SELATAN',
                'latitude' => -1.23333,
                'longitude' => 101.417,
            ),
        66 =>
            array (
                'id' => '1311',
                'province_id' => '13',
                'name' => 'KABUPATEN DHARMASRAYA',
                'alt_name' => 'KABUPATEN DHARMASRAYA',
                'latitude' => -1.05,
                'longitude' => 101.367,
            ),
        67 =>
            array (
                'id' => '1312',
                'province_id' => '13',
                'name' => 'KABUPATEN PASAMAN BARAT',
                'alt_name' => 'KABUPATEN PASAMAN BARAT',
                'latitude' => 0.28152,
                'longitude' => 99.51965,
            ),
        68 =>
            array (
                'id' => '1371',
                'province_id' => '13',
                'name' => 'KOTA PADANG',
                'alt_name' => 'KOTA PADANG',
                'latitude' => -0.98333,
                'longitude' => 100.45,
            ),
        69 =>
            array (
                'id' => '1372',
                'province_id' => '13',
                'name' => 'KOTA SOLOK',
                'alt_name' => 'KOTA SOLOK',
                'latitude' => -0.76667,
                'longitude' => 100.61667,
            ),
        70 =>
            array (
                'id' => '1373',
                'province_id' => '13',
                'name' => 'KOTA SAWAH LUNTO',
                'alt_name' => 'KOTA SAWAH LUNTO',
                'latitude' => -0.6,
                'longitude' => 100.75,
            ),
        71 =>
            array (
                'id' => '1374',
                'province_id' => '13',
                'name' => 'KOTA PADANG PANJANG',
                'alt_name' => 'KOTA PADANG PANJANG',
                'latitude' => -0.45,
                'longitude' => 100.43333,
            ),
        72 =>
            array (
                'id' => '1375',
                'province_id' => '13',
                'name' => 'KOTA BUKITTINGGI',
                'alt_name' => 'KOTA BUKITTINGGI',
                'latitude' => -0.275,
                'longitude' => 100.375,
            ),
        73 =>
            array (
                'id' => '1376',
                'province_id' => '13',
                'name' => 'KOTA PAYAKUMBUH',
                'alt_name' => 'KOTA PAYAKUMBUH',
                'latitude' => -0.23333,
                'longitude' => 100.63333,
            ),
        74 =>
            array (
                'id' => '1377',
                'province_id' => '13',
                'name' => 'KOTA PARIAMAN',
                'alt_name' => 'KOTA PARIAMAN',
                'latitude' => -0.62682,
                'longitude' => 100.12047,
            ),
        75 =>
            array (
                'id' => '1401',
                'province_id' => '14',
                'name' => 'KABUPATEN KUANTAN SINGINGI',
                'alt_name' => 'KABUPATEN KUANTAN SINGINGI',
                'latitude' => -0.47532,
                'longitude' => 101.45857,
            ),
        76 =>
            array (
                'id' => '1402',
                'province_id' => '14',
                'name' => 'KABUPATEN INDRAGIRI HULU',
                'alt_name' => 'KABUPATEN INDRAGIRI HULU',
                'latitude' => -0.55,
                'longitude' => 102.31667,
            ),
        77 =>
            array (
                'id' => '1403',
                'province_id' => '14',
                'name' => 'KABUPATEN INDRAGIRI HILIR',
                'alt_name' => 'KABUPATEN INDRAGIRI HILIR',
                'latitude' => -0.33333,
                'longitude' => 103.16667,
            ),
        78 =>
            array (
                'id' => '1404',
                'province_id' => '14',
                'name' => 'KABUPATEN PELALAWAN',
                'alt_name' => 'KABUPATEN PELALAWAN',
                'latitude' => 0.20822,
                'longitude' => 102.18607,
            ),
        79 =>
            array (
                'id' => '1405',
                'province_id' => '14',
                'name' => 'KABUPATEN SIAK',
                'alt_name' => 'KABUPATEN SIAK',
                'latitude' => 0.97453,
                'longitude' => 102.01355,
            ),
        80 =>
            array (
                'id' => '1406',
                'province_id' => '14',
                'name' => 'KABUPATEN KAMPAR',
                'alt_name' => 'KABUPATEN KAMPAR',
                'latitude' => 0.2344,
                'longitude' => 101.2131,
            ),
        81 =>
            array (
                'id' => '1407',
                'province_id' => '14',
                'name' => 'KABUPATEN ROKAN HULU',
                'alt_name' => 'KABUPATEN ROKAN HULU',
                'latitude' => 0.88333,
                'longitude' => 100.48333,
            ),
        82 =>
            array (
                'id' => '1408',
                'province_id' => '14',
                'name' => 'KABUPATEN BENGKALIS',
                'alt_name' => 'KABUPATEN BENGKALIS',
                'latitude' => 0.9838,
                'longitude' => 102.5096,
            ),
        83 =>
            array (
                'id' => '1409',
                'province_id' => '14',
                'name' => 'KABUPATEN ROKAN HILIR',
                'alt_name' => 'KABUPATEN ROKAN HILIR',
                'latitude' => 2.16599,
                'longitude' => 100.82514,
            ),
        84 =>
            array (
                'id' => '1410',
                'province_id' => '14',
                'name' => 'KABUPATEN KEPULAUAN MERANTI',
                'alt_name' => 'KABUPATEN KEPULAUAN MERANTI',
                'latitude' => 0.97488,
                'longitude' => 102.69539,
            ),
        85 =>
            array (
                'id' => '1471',
                'province_id' => '14',
                'name' => 'KOTA PEKANBARU',
                'alt_name' => 'KOTA PEKANBARU',
                'latitude' => 0.53333,
                'longitude' => 101.46667,
            ),
        86 =>
            array (
                'id' => '1473',
                'province_id' => '14',
                'name' => 'KOTA DUMAI',
                'alt_name' => 'KOTA DUMAI',
                'latitude' => 1.61592,
                'longitude' => 101.4917,
            ),
        87 =>
            array (
                'id' => '1501',
                'province_id' => '15',
                'name' => 'KABUPATEN KERINCI',
                'alt_name' => 'KABUPATEN KERINCI',
                'latitude' => -2.03333,
                'longitude' => 101.53333,
            ),
        88 =>
            array (
                'id' => '1502',
                'province_id' => '15',
                'name' => 'KABUPATEN MERANGIN',
                'alt_name' => 'KABUPATEN MERANGIN',
                'latitude' => -2.06933,
                'longitude' => 102.13303,
            ),
        89 =>
            array (
                'id' => '1503',
                'province_id' => '15',
                'name' => 'KABUPATEN SAROLANGUN',
                'alt_name' => 'KABUPATEN SAROLANGUN',
                'latitude' => -2.3,
                'longitude' => 102.65,
            ),
        90 =>
            array (
                'id' => '1504',
                'province_id' => '15',
                'name' => 'KABUPATEN BATANG HARI',
                'alt_name' => 'KABUPATEN BATANG HARI',
                'latitude' => -1.75,
                'longitude' => 103.11667,
            ),
        91 =>
            array (
                'id' => '1505',
                'province_id' => '15',
                'name' => 'KABUPATEN MUARO JAMBI',
                'alt_name' => 'KABUPATEN MUARO JAMBI',
                'latitude' => -1.55214,
                'longitude' => 103.82163,
            ),
        92 =>
            array (
                'id' => '1506',
                'province_id' => '15',
                'name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'alt_name' => 'KABUPATEN TANJUNG JABUNG TIMUR',
                'latitude' => -1.13198,
                'longitude' => 103.61755,
            ),
        93 =>
            array (
                'id' => '1507',
                'province_id' => '15',
                'name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'alt_name' => 'KABUPATEN TANJUNG JABUNG BARAT',
                'latitude' => -1.1544,
                'longitude' => 103.24402,
            ),
        94 =>
            array (
                'id' => '1508',
                'province_id' => '15',
                'name' => 'KABUPATEN TEBO',
                'alt_name' => 'KABUPATEN TEBO',
                'latitude' => -1.45576,
                'longitude' => 102.37473,
            ),
        95 =>
            array (
                'id' => '1509',
                'province_id' => '15',
                'name' => 'KABUPATEN BUNGO',
                'alt_name' => 'KABUPATEN BUNGO',
                'latitude' => -1.50222,
                'longitude' => 101.96,
            ),
        96 =>
            array (
                'id' => '1571',
                'province_id' => '15',
                'name' => 'KOTA JAMBI',
                'alt_name' => 'KOTA JAMBI',
                'latitude' => -1.61667,
                'longitude' => 103.65,
            ),
        97 =>
            array (
                'id' => '1572',
                'province_id' => '15',
                'name' => 'KOTA SUNGAI PENUH',
                'alt_name' => 'KOTA SUNGAI PENUH',
                'latitude' => -2.10896,
                'longitude' => 101.32175,
            ),
        98 =>
            array (
                'id' => '1601',
                'province_id' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ULU',
                'alt_name' => 'KABUPATEN OGAN KOMERING ULU',
                'latitude' => -4.13333,
                'longitude' => 104.03333,
            ),
        99 =>
            array (
                'id' => '1602',
                'province_id' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ILIR',
                'alt_name' => 'KABUPATEN OGAN KOMERING ILIR',
                'latitude' => -3.36667,
                'longitude' => 105.36667,
            ),
        100 =>
            array (
                'id' => '1603',
                'province_id' => '16',
                'name' => 'KABUPATEN MUARA ENIM',
                'alt_name' => 'KABUPATEN MUARA ENIM',
                'latitude' => -4.2327,
                'longitude' => 103.6141,
            ),
        101 =>
            array (
                'id' => '1604',
                'province_id' => '16',
                'name' => 'KABUPATEN LAHAT',
                'alt_name' => 'KABUPATEN LAHAT',
                'latitude' => -3.7864,
                'longitude' => 103.5428,
            ),
        102 =>
            array (
                'id' => '1605',
                'province_id' => '16',
                'name' => 'KABUPATEN MUSI RAWAS',
                'alt_name' => 'KABUPATEN MUSI RAWAS',
                'latitude' => -3.08333,
                'longitude' => 103.2,
            ),
        103 =>
            array (
                'id' => '1606',
                'province_id' => '16',
                'name' => 'KABUPATEN MUSI BANYU ASIN',
                'alt_name' => 'KABUPATEN MUSI BANYU ASIN',
                'latitude' => -2.41667,
                'longitude' => 103.75,
            ),
        104 =>
            array (
                'id' => '1607',
                'province_id' => '16',
                'name' => 'KABUPATEN BANYU ASIN',
                'alt_name' => 'KABUPATEN BANYU ASIN',
                'latitude' => -2.88333,
                'longitude' => 104.38306,
            ),
        105 =>
            array (
                'id' => '1608',
                'province_id' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'alt_name' => 'KABUPATEN OGAN KOMERING ULU SELATAN',
                'latitude' => -4.65728,
                'longitude' => 104.00659,
            ),
        106 =>
            array (
                'id' => '1609',
                'province_id' => '16',
                'name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'alt_name' => 'KABUPATEN OGAN KOMERING ULU TIMUR',
                'latitude' => -3.85679,
                'longitude' => 104.75209,
            ),
        107 =>
            array (
                'id' => '1610',
                'province_id' => '16',
                'name' => 'KABUPATEN OGAN ILIR',
                'alt_name' => 'KABUPATEN OGAN ILIR',
                'latitude' => -3.43186,
                'longitude' => 104.62727,
            ),
        108 =>
            array (
                'id' => '1611',
                'province_id' => '16',
                'name' => 'KABUPATEN EMPAT LAWANG',
                'alt_name' => 'KABUPATEN EMPAT LAWANG',
                'latitude' => 3.22667,
                'longitude' => 99.09256,
            ),
        109 =>
            array (
                'id' => '1612',
                'province_id' => '16',
                'name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'alt_name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
                'latitude' => -3.21342,
                'longitude' => 104.08722,
            ),
        110 =>
            array (
                'id' => '1613',
                'province_id' => '16',
                'name' => 'KABUPATEN MUSI RAWAS UTARA',
                'alt_name' => 'KABUPATEN MUSI RAWAS UTARA',
                'latitude' => -2.48533,
                'longitude' => 103.29346,
            ),
        111 =>
            array (
                'id' => '1671',
                'province_id' => '16',
                'name' => 'KOTA PALEMBANG',
                'alt_name' => 'KOTA PALEMBANG',
                'latitude' => -3,
                'longitude' => 104.71667,
            ),
        112 =>
            array (
                'id' => '1672',
                'province_id' => '16',
                'name' => 'KOTA PRABUMULIH',
                'alt_name' => 'KOTA PRABUMULIH',
                'latitude' => -3.46202,
                'longitude' => 104.2229,
            ),
        113 =>
            array (
                'id' => '1673',
                'province_id' => '16',
                'name' => 'KOTA PAGAR ALAM',
                'alt_name' => 'KOTA PAGAR ALAM',
                'latitude' => -4.13055,
                'longitude' => 103.26822,
            ),
        114 =>
            array (
                'id' => '1674',
                'province_id' => '16',
                'name' => 'KOTA LUBUK LINGGAU',
                'alt_name' => 'KOTA LUBUK LINGGAU',
                'latitude' => -3.29308,
                'longitude' => 102.85503,
            ),
        115 =>
            array (
                'id' => '1701',
                'province_id' => '17',
                'name' => 'KABUPATEN BENGKULU SELATAN',
                'alt_name' => 'KABUPATEN BENGKULU SELATAN',
                'latitude' => -4.35,
                'longitude' => 103.03333,
            ),
        116 =>
            array (
                'id' => '1702',
                'province_id' => '17',
                'name' => 'KABUPATEN REJANG LEBONG',
                'alt_name' => 'KABUPATEN REJANG LEBONG',
                'latitude' => -3.43333,
                'longitude' => 102.71667,
            ),
        117 =>
            array (
                'id' => '1703',
                'province_id' => '17',
                'name' => 'KABUPATEN BENGKULU UTARA',
                'alt_name' => 'KABUPATEN BENGKULU UTARA',
                'latitude' => -3.33333,
                'longitude' => 102.05,
            ),
        118 =>
            array (
                'id' => '1704',
                'province_id' => '17',
                'name' => 'KABUPATEN KAUR',
                'alt_name' => 'KABUPATEN KAUR',
                'latitude' => -4.78179,
                'longitude' => 103.36109,
            ),
        119 =>
            array (
                'id' => '1705',
                'province_id' => '17',
                'name' => 'KABUPATEN SELUMA',
                'alt_name' => 'KABUPATEN SELUMA',
                'latitude' => -3.96644,
                'longitude' => 102.47429,
            ),
        120 =>
            array (
                'id' => '1706',
                'province_id' => '17',
                'name' => 'KABUPATEN MUKOMUKO',
                'alt_name' => 'KABUPATEN MUKOMUKO',
                'latitude' => -3.07438,
                'longitude' => 101.54766,
            ),
        121 =>
            array (
                'id' => '1707',
                'province_id' => '17',
                'name' => 'KABUPATEN LEBONG',
                'alt_name' => 'KABUPATEN LEBONG',
                'latitude' => -3.24278,
                'longitude' => 102.3349,
            ),
        122 =>
            array (
                'id' => '1708',
                'province_id' => '17',
                'name' => 'KABUPATEN KEPAHIANG',
                'alt_name' => 'KABUPATEN KEPAHIANG',
                'latitude' => -3.60194,
                'longitude' => 102.56424,
            ),
        123 =>
            array (
                'id' => '1709',
                'province_id' => '17',
                'name' => 'KABUPATEN BENGKULU TENGAH',
                'alt_name' => 'KABUPATEN BENGKULU TENGAH',
                'latitude' => -3.20679,
                'longitude' => 102.12616,
            ),
        124 =>
            array (
                'id' => '1771',
                'province_id' => '17',
                'name' => 'KOTA BENGKULU',
                'alt_name' => 'KOTA BENGKULU',
                'latitude' => -3.81667,
                'longitude' => 102.31667,
            ),
        125 =>
            array (
                'id' => '1801',
                'province_id' => '18',
                'name' => 'KABUPATEN LAMPUNG BARAT',
                'alt_name' => 'KABUPATEN LAMPUNG BARAT',
                'latitude' => -5.14904,
                'longitude' => 104.19309,
            ),
        126 =>
            array (
                'id' => '1802',
                'province_id' => '18',
                'name' => 'KABUPATEN TANGGAMUS',
                'alt_name' => 'KABUPATEN TANGGAMUS',
                'latitude' => -5.38508,
                'longitude' => 104.62349,
            ),
        127 =>
            array (
                'id' => '1803',
                'province_id' => '18',
                'name' => 'KABUPATEN LAMPUNG SELATAN',
                'alt_name' => 'KABUPATEN LAMPUNG SELATAN',
                'latitude' => -5.4531,
                'longitude' => 104.9877,
            ),
        128 =>
            array (
                'id' => '1804',
                'province_id' => '18',
                'name' => 'KABUPATEN LAMPUNG TIMUR',
                'alt_name' => 'KABUPATEN LAMPUNG TIMUR',
                'latitude' => -5.10273,
                'longitude' => 105.68003,
            ),
        129 =>
            array (
                'id' => '1805',
                'province_id' => '18',
                'name' => 'KABUPATEN LAMPUNG TENGAH',
                'alt_name' => 'KABUPATEN LAMPUNG TENGAH',
                'latitude' => -4.86667,
                'longitude' => 105.26667,
            ),
        130 =>
            array (
                'id' => '1806',
                'province_id' => '18',
                'name' => 'KABUPATEN LAMPUNG UTARA',
                'alt_name' => 'KABUPATEN LAMPUNG UTARA',
                'latitude' => -4.81667,
                'longitude' => 104.8,
            ),
        131 =>
            array (
                'id' => '1807',
                'province_id' => '18',
                'name' => 'KABUPATEN WAY KANAN',
                'alt_name' => 'KABUPATEN WAY KANAN',
                'latitude' => -4.44705,
                'longitude' => 104.52753,
            ),
        132 =>
            array (
                'id' => '1808',
                'province_id' => '18',
                'name' => 'KABUPATEN TULANGBAWANG',
                'alt_name' => 'KABUPATEN TULANGBAWANG',
                'latitude' => -4.20604,
                'longitude' => 105.57999,
            ),
        133 =>
            array (
                'id' => '1809',
                'province_id' => '18',
                'name' => 'KABUPATEN PESAWARAN',
                'alt_name' => 'KABUPATEN PESAWARAN',
                'latitude' => -5.4298,
                'longitude' => 105.17899,
            ),
        134 =>
            array (
                'id' => '1810',
                'province_id' => '18',
                'name' => 'KABUPATEN PRINGSEWU',
                'alt_name' => 'KABUPATEN PRINGSEWU',
                'latitude' => -5.42211,
                'longitude' => 104.93454,
            ),
        135 =>
            array (
                'id' => '1811',
                'province_id' => '18',
                'name' => 'KABUPATEN MESUJI',
                'alt_name' => 'KABUPATEN MESUJI',
                'latitude' => -4.0439,
                'longitude' => 105.4013,
            ),
        136 =>
            array (
                'id' => '1812',
                'province_id' => '18',
                'name' => 'KABUPATEN TULANG BAWANG BARAT',
                'alt_name' => 'KABUPATEN TULANG BAWANG BARAT',
                'latitude' => -4.43975,
                'longitude' => 105.0444,
            ),
        137 =>
            array (
                'id' => '1813',
                'province_id' => '18',
                'name' => 'KABUPATEN PESISIR BARAT',
                'alt_name' => 'KABUPATEN PESISIR BARAT',
                'latitude' => -5.19323,
                'longitude' => 103.93976,
            ),
        138 =>
            array (
                'id' => '1871',
                'province_id' => '18',
                'name' => 'KOTA BANDAR LAMPUNG',
                'alt_name' => 'KOTA BANDAR LAMPUNG',
                'latitude' => -5.41667,
                'longitude' => 105.25,
            ),
        139 =>
            array (
                'id' => '1872',
                'province_id' => '18',
                'name' => 'KOTA METRO',
                'alt_name' => 'KOTA METRO',
                'latitude' => -5.11856,
                'longitude' => 105.29949,
            ),
        140 =>
            array (
                'id' => '1901',
                'province_id' => '19',
                'name' => 'KABUPATEN BANGKA',
                'alt_name' => 'KABUPATEN BANGKA',
                'latitude' => -1.91667,
                'longitude' => 105.93333,
            ),
        141 =>
            array (
                'id' => '1902',
                'province_id' => '19',
                'name' => 'KABUPATEN BELITUNG',
                'alt_name' => 'KABUPATEN BELITUNG',
                'latitude' => -2.86667,
                'longitude' => 107.7,
            ),
        142 =>
            array (
                'id' => '1903',
                'province_id' => '19',
                'name' => 'KABUPATEN BANGKA BARAT',
                'alt_name' => 'KABUPATEN BANGKA BARAT',
                'latitude' => -1.95839,
                'longitude' => 105.53741,
            ),
        143 =>
            array (
                'id' => '1904',
                'province_id' => '19',
                'name' => 'KABUPATEN BANGKA TENGAH',
                'alt_name' => 'KABUPATEN BANGKA TENGAH',
                'latitude' => -2.33989,
                'longitude' => 106.1142,
            ),
        144 =>
            array (
                'id' => '1905',
                'province_id' => '19',
                'name' => 'KABUPATEN BANGKA SELATAN',
                'alt_name' => 'KABUPATEN BANGKA SELATAN',
                'latitude' => -2.66803,
                'longitude' => 106.01257,
            ),
        145 =>
            array (
                'id' => '1906',
                'province_id' => '19',
                'name' => 'KABUPATEN BELITUNG TIMUR',
                'alt_name' => 'KABUPATEN BELITUNG TIMUR',
                'latitude' => -2.9627,
                'longitude' => 108.15216,
            ),
        146 =>
            array (
                'id' => '1971',
                'province_id' => '19',
                'name' => 'KOTA PANGKAL PINANG',
                'alt_name' => 'KOTA PANGKAL PINANG',
                'latitude' => -2.13333,
                'longitude' => 106.13333,
            ),
        147 =>
            array (
                'id' => '2101',
                'province_id' => '21',
                'name' => 'KABUPATEN KARIMUN',
                'alt_name' => 'KABUPATEN KARIMUN',
                'latitude' => 0.80764,
                'longitude' => 103.41911,
            ),
        148 =>
            array (
                'id' => '2102',
                'province_id' => '21',
                'name' => 'KABUPATEN BINTAN',
                'alt_name' => 'KABUPATEN BINTAN',
                'latitude' => 0.95,
                'longitude' => 104.61944,
            ),
        149 =>
            array (
                'id' => '2103',
                'province_id' => '21',
                'name' => 'KABUPATEN NATUNA',
                'alt_name' => 'KABUPATEN NATUNA',
                'latitude' => 4.71417,
                'longitude' => 107.97639,
            ),
        150 =>
            array (
                'id' => '2104',
                'province_id' => '21',
                'name' => 'KABUPATEN LINGGA',
                'alt_name' => 'KABUPATEN LINGGA',
                'latitude' => 0.2,
                'longitude' => 104.61667,
            ),
        151 =>
            array (
                'id' => '2105',
                'province_id' => '21',
                'name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'alt_name' => 'KABUPATEN KEPULAUAN ANAMBAS',
                'latitude' => 3,
                'longitude' => 106,
            ),
        152 =>
            array (
                'id' => '2171',
                'province_id' => '21',
                'name' => 'KOTA BATAM',
                'alt_name' => 'KOTA BATAM',
                'latitude' => 1.05211,
                'longitude' => 104.02851,
            ),
        153 =>
            array (
                'id' => '2172',
                'province_id' => '21',
                'name' => 'KOTA TANJUNG PINANG',
                'alt_name' => 'KOTA TANJUNG PINANG',
                'latitude' => 0.91683,
                'longitude' => 104.44329,
            ),
        154 =>
            array (
                'id' => '3101',
                'province_id' => '31',
                'name' => 'KABUPATEN KEPULAUAN SERIBU',
                'alt_name' => 'KABUPATEN KEPULAUAN SERIBU',
                'latitude' => -5.5985,
                'longitude' => 106.55271,
            ),
        155 =>
            array (
                'id' => '3171',
                'province_id' => '31',
                'name' => 'KOTA JAKARTA SELATAN',
                'alt_name' => 'KOTA JAKARTA SELATAN',
                'latitude' => -6.266,
                'longitude' => 106.8135,
            ),
        156 =>
            array (
                'id' => '3172',
                'province_id' => '31',
                'name' => 'KOTA JAKARTA TIMUR',
                'alt_name' => 'KOTA JAKARTA TIMUR',
                'latitude' => -6.2521,
                'longitude' => 106.884,
            ),
        157 =>
            array (
                'id' => '3173',
                'province_id' => '31',
                'name' => 'KOTA JAKARTA PUSAT',
                'alt_name' => 'KOTA JAKARTA PUSAT',
                'latitude' => -6.1777,
                'longitude' => 106.8403,
            ),
        158 =>
            array (
                'id' => '3174',
                'province_id' => '31',
                'name' => 'KOTA JAKARTA BARAT',
                'alt_name' => 'KOTA JAKARTA BARAT',
                'latitude' => -6.1676,
                'longitude' => 106.7673,
            ),
        159 =>
            array (
                'id' => '3175',
                'province_id' => '31',
                'name' => 'KOTA JAKARTA UTARA',
                'alt_name' => 'KOTA JAKARTA UTARA',
                'latitude' => -6.1339,
                'longitude' => 106.8823,
            ),
        160 =>
            array (
                'id' => '3201',
                'province_id' => '32',
                'name' => 'KABUPATEN BOGOR',
                'alt_name' => 'KABUPATEN BOGOR',
                'latitude' => -6.58333,
                'longitude' => 106.71667,
            ),
        161 =>
            array (
                'id' => '3202',
                'province_id' => '32',
                'name' => 'KABUPATEN SUKABUMI',
                'alt_name' => 'KABUPATEN SUKABUMI',
                'latitude' => -7.06667,
                'longitude' => 106.7,
            ),
        162 =>
            array (
                'id' => '3203',
                'province_id' => '32',
                'name' => 'KABUPATEN CIANJUR',
                'alt_name' => 'KABUPATEN CIANJUR',
                'latitude' => -6.7725,
                'longitude' => 107.08306,
            ),
        163 =>
            array (
                'id' => '3204',
                'province_id' => '32',
                'name' => 'KABUPATEN BANDUNG',
                'alt_name' => 'KABUPATEN BANDUNG',
                'latitude' => -7.1,
                'longitude' => 107.6,
            ),
        164 =>
            array (
                'id' => '3205',
                'province_id' => '32',
                'name' => 'KABUPATEN GARUT',
                'alt_name' => 'KABUPATEN GARUT',
                'latitude' => -7.38333,
                'longitude' => 107.76667,
            ),
        165 =>
            array (
                'id' => '3206',
                'province_id' => '32',
                'name' => 'KABUPATEN TASIKMALAYA',
                'alt_name' => 'KABUPATEN TASIKMALAYA',
                'latitude' => -7.5,
                'longitude' => 108.13333,
            ),
        166 =>
            array (
                'id' => '3207',
                'province_id' => '32',
                'name' => 'KABUPATEN CIAMIS',
                'alt_name' => 'KABUPATEN CIAMIS',
                'latitude' => -7.28333,
                'longitude' => 108.41667,
            ),
        167 =>
            array (
                'id' => '3208',
                'province_id' => '32',
                'name' => 'KABUPATEN KUNINGAN',
                'alt_name' => 'KABUPATEN KUNINGAN',
                'latitude' => -7,
                'longitude' => 108.55,
            ),
        168 =>
            array (
                'id' => '3209',
                'province_id' => '32',
                'name' => 'KABUPATEN CIREBON',
                'alt_name' => 'KABUPATEN CIREBON',
                'latitude' => -6.8,
                'longitude' => 108.56667,
            ),
        169 =>
            array (
                'id' => '3210',
                'province_id' => '32',
                'name' => 'KABUPATEN MAJALENGKA',
                'alt_name' => 'KABUPATEN MAJALENGKA',
                'latitude' => -6.81667,
                'longitude' => 108.28333,
            ),
        170 =>
            array (
                'id' => '3211',
                'province_id' => '32',
                'name' => 'KABUPATEN SUMEDANG',
                'alt_name' => 'KABUPATEN SUMEDANG',
                'latitude' => -6.81667,
                'longitude' => 107.98333,
            ),
        171 =>
            array (
                'id' => '3212',
                'province_id' => '32',
                'name' => 'KABUPATEN INDRAMAYU',
                'alt_name' => 'KABUPATEN INDRAMAYU',
                'latitude' => -6.45,
                'longitude' => 108.16667,
            ),
        172 =>
            array (
                'id' => '3213',
                'province_id' => '32',
                'name' => 'KABUPATEN SUBANG',
                'alt_name' => 'KABUPATEN SUBANG',
                'latitude' => -6.50833,
                'longitude' => 107.7025,
            ),
        173 =>
            array (
                'id' => '3214',
                'province_id' => '32',
                'name' => 'KABUPATEN PURWAKARTA',
                'alt_name' => 'KABUPATEN PURWAKARTA',
                'latitude' => -6.58333,
                'longitude' => 107.45,
            ),
        174 =>
            array (
                'id' => '3215',
                'province_id' => '32',
                'name' => 'KABUPATEN KARAWANG',
                'alt_name' => 'KABUPATEN KARAWANG',
                'latitude' => -6.26667,
                'longitude' => 107.41667,
            ),
        175 =>
            array (
                'id' => '3216',
                'province_id' => '32',
                'name' => 'KABUPATEN BEKASI',
                'alt_name' => 'KABUPATEN BEKASI',
                'latitude' => -6.24667,
                'longitude' => 107.10833,
            ),
        176 =>
            array (
                'id' => '3217',
                'province_id' => '32',
                'name' => 'KABUPATEN BANDUNG BARAT',
                'alt_name' => 'KABUPATEN BANDUNG BARAT',
                'latitude' => -6.83333,
                'longitude' => 107.48333,
            ),
        177 =>
            array (
                'id' => '3218',
                'province_id' => '32',
                'name' => 'KABUPATEN PANGANDARAN',
                'alt_name' => 'KABUPATEN PANGANDARAN',
                'latitude' => -7.6673,
                'longitude' => 108.64037,
            ),
        178 =>
            array (
                'id' => '3271',
                'province_id' => '32',
                'name' => 'KOTA BOGOR',
                'alt_name' => 'KOTA BOGOR',
                'latitude' => -6.59167,
                'longitude' => 106.8,
            ),
        179 =>
            array (
                'id' => '3272',
                'province_id' => '32',
                'name' => 'KOTA SUKABUMI',
                'alt_name' => 'KOTA SUKABUMI',
                'latitude' => -6.95,
                'longitude' => 106.93333,
            ),
        180 =>
            array (
                'id' => '3273',
                'province_id' => '32',
                'name' => 'KOTA BANDUNG',
                'alt_name' => 'KOTA BANDUNG',
                'latitude' => -6.9175,
                'longitude' => 107.62444,
            ),
        181 =>
            array (
                'id' => '3274',
                'province_id' => '32',
                'name' => 'KOTA CIREBON',
                'alt_name' => 'KOTA CIREBON',
                'latitude' => -6.75,
                'longitude' => 108.55,
            ),
        182 =>
            array (
                'id' => '3275',
                'province_id' => '32',
                'name' => 'KOTA BEKASI',
                'alt_name' => 'KOTA BEKASI',
                'latitude' => -6.28333,
                'longitude' => 106.98333,
            ),
        183 =>
            array (
                'id' => '3276',
                'province_id' => '32',
                'name' => 'KOTA DEPOK',
                'alt_name' => 'KOTA DEPOK',
                'latitude' => -6.4,
                'longitude' => 106.81667,
            ),
        184 =>
            array (
                'id' => '3277',
                'province_id' => '32',
                'name' => 'KOTA CIMAHI',
                'alt_name' => 'KOTA CIMAHI',
                'latitude' => -6.89167,
                'longitude' => 107.55,
            ),
        185 =>
            array (
                'id' => '3278',
                'province_id' => '32',
                'name' => 'KOTA TASIKMALAYA',
                'alt_name' => 'KOTA TASIKMALAYA',
                'latitude' => -7.35,
                'longitude' => 108.21667,
            ),
        186 =>
            array (
                'id' => '3279',
                'province_id' => '32',
                'name' => 'KOTA BANJAR',
                'alt_name' => 'KOTA BANJAR',
                'latitude' => -7.36996,
                'longitude' => 108.53209,
            ),
        187 =>
            array (
                'id' => '3301',
                'province_id' => '33',
                'name' => 'KABUPATEN CILACAP',
                'alt_name' => 'KABUPATEN CILACAP',
                'latitude' => -7.57417,
                'longitude' => 108.98861,
            ),
        188 =>
            array (
                'id' => '3302',
                'province_id' => '33',
                'name' => 'KABUPATEN BANYUMAS',
                'alt_name' => 'KABUPATEN BANYUMAS',
                'latitude' => -7.45,
                'longitude' => 109.16667,
            ),
        189 =>
            array (
                'id' => '3303',
                'province_id' => '33',
                'name' => 'KABUPATEN PURBALINGGA',
                'alt_name' => 'KABUPATEN PURBALINGGA',
                'latitude' => -7.28417,
                'longitude' => 109.35028,
            ),
        190 =>
            array (
                'id' => '3304',
                'province_id' => '33',
                'name' => 'KABUPATEN BANJARNEGARA',
                'alt_name' => 'KABUPATEN BANJARNEGARA',
                'latitude' => -7.35111,
                'longitude' => 109.5875,
            ),
        191 =>
            array (
                'id' => '3305',
                'province_id' => '33',
                'name' => 'KABUPATEN KEBUMEN',
                'alt_name' => 'KABUPATEN KEBUMEN',
                'latitude' => -7.63917,
                'longitude' => 109.66056,
            ),
        192 =>
            array (
                'id' => '3306',
                'province_id' => '33',
                'name' => 'KABUPATEN PURWOREJO',
                'alt_name' => 'KABUPATEN PURWOREJO',
                'latitude' => -7.7,
                'longitude' => 109.96667,
            ),
        193 =>
            array (
                'id' => '3307',
                'province_id' => '33',
                'name' => 'KABUPATEN WONOSOBO',
                'alt_name' => 'KABUPATEN WONOSOBO',
                'latitude' => -7.36139,
                'longitude' => 109.92667,
            ),
        194 =>
            array (
                'id' => '3308',
                'province_id' => '33',
                'name' => 'KABUPATEN MAGELANG',
                'alt_name' => 'KABUPATEN MAGELANG',
                'latitude' => -7.4275,
                'longitude' => 110.16194,
            ),
        195 =>
            array (
                'id' => '3309',
                'province_id' => '33',
                'name' => 'KABUPATEN BOYOLALI',
                'alt_name' => 'KABUPATEN BOYOLALI',
                'latitude' => -7.5,
                'longitude' => 110.7,
            ),
        196 =>
            array (
                'id' => '3310',
                'province_id' => '33',
                'name' => 'KABUPATEN KLATEN',
                'alt_name' => 'KABUPATEN KLATEN',
                'latitude' => -7.68333,
                'longitude' => 110.61667,
            ),
        197 =>
            array (
                'id' => '3311',
                'province_id' => '33',
                'name' => 'KABUPATEN SUKOHARJO',
                'alt_name' => 'KABUPATEN SUKOHARJO',
                'latitude' => -7.68333,
                'longitude' => 110.83333,
            ),
        198 =>
            array (
                'id' => '3312',
                'province_id' => '33',
                'name' => 'KABUPATEN WONOGIRI',
                'alt_name' => 'KABUPATEN WONOGIRI',
                'latitude' => -7.91667,
                'longitude' => 111,
            ),
        199 =>
            array (
                'id' => '3313',
                'province_id' => '33',
                'name' => 'KABUPATEN KARANGANYAR',
                'alt_name' => 'KABUPATEN KARANGANYAR',
                'latitude' => -7.62806,
                'longitude' => 111.0625,
            ),
        200 =>
            array (
                'id' => '3314',
                'province_id' => '33',
                'name' => 'KABUPATEN SRAGEN',
                'alt_name' => 'KABUPATEN SRAGEN',
                'latitude' => -7.41278,
                'longitude' => 110.935,
            ),
        201 =>
            array (
                'id' => '3315',
                'province_id' => '33',
                'name' => 'KABUPATEN GROBOGAN',
                'alt_name' => 'KABUPATEN GROBOGAN',
                'latitude' => -7.11667,
                'longitude' => 110.91667,
            ),
        202 =>
            array (
                'id' => '3316',
                'province_id' => '33',
                'name' => 'KABUPATEN BLORA',
                'alt_name' => 'KABUPATEN BLORA',
                'latitude' => -7.06667,
                'longitude' => 111.38333,
            ),
        203 =>
            array (
                'id' => '3317',
                'province_id' => '33',
                'name' => 'KABUPATEN REMBANG',
                'alt_name' => 'KABUPATEN REMBANG',
                'latitude' => -6.78333,
                'longitude' => 111.46667,
            ),
        204 =>
            array (
                'id' => '3318',
                'province_id' => '33',
                'name' => 'KABUPATEN PATI',
                'alt_name' => 'KABUPATEN PATI',
                'latitude' => -6.76667,
                'longitude' => 111.1,
            ),
        205 =>
            array (
                'id' => '3319',
                'province_id' => '33',
                'name' => 'KABUPATEN KUDUS',
                'alt_name' => 'KABUPATEN KUDUS',
                'latitude' => -6.8,
                'longitude' => 110.86667,
            ),
        206 =>
            array (
                'id' => '3320',
                'province_id' => '33',
                'name' => 'KABUPATEN JEPARA',
                'alt_name' => 'KABUPATEN JEPARA',
                'latitude' => -6.58333,
                'longitude' => 110.76667,
            ),
        207 =>
            array (
                'id' => '3321',
                'province_id' => '33',
                'name' => 'KABUPATEN DEMAK',
                'alt_name' => 'KABUPATEN DEMAK',
                'latitude' => -6.8993,
                'longitude' => 110.6122,
            ),
        208 =>
            array (
                'id' => '3322',
                'province_id' => '33',
                'name' => 'KABUPATEN SEMARANG',
                'alt_name' => 'KABUPATEN SEMARANG',
                'latitude' => -7.20667,
                'longitude' => 110.44139,
            ),
        209 =>
            array (
                'id' => '3323',
                'province_id' => '33',
                'name' => 'KABUPATEN TEMANGGUNG',
                'alt_name' => 'KABUPATEN TEMANGGUNG',
                'latitude' => -7.25,
                'longitude' => 110.11667,
            ),
        210 =>
            array (
                'id' => '3324',
                'province_id' => '33',
                'name' => 'KABUPATEN KENDAL',
                'alt_name' => 'KABUPATEN KENDAL',
                'latitude' => -7.0256,
                'longitude' => 110.1685,
            ),
        211 =>
            array (
                'id' => '3325',
                'province_id' => '33',
                'name' => 'KABUPATEN BATANG',
                'alt_name' => 'KABUPATEN BATANG',
                'latitude' => -7.03333,
                'longitude' => 109.88333,
            ),
        212 =>
            array (
                'id' => '3326',
                'province_id' => '33',
                'name' => 'KABUPATEN PEKALONGAN',
                'alt_name' => 'KABUPATEN PEKALONGAN',
                'latitude' => -7.0319,
                'longitude' => 109.624,
            ),
        213 =>
            array (
                'id' => '3327',
                'province_id' => '33',
                'name' => 'KABUPATEN PEMALANG',
                'alt_name' => 'KABUPATEN PEMALANG',
                'latitude' => -7.03333,
                'longitude' => 109.4,
            ),
        214 =>
            array (
                'id' => '3328',
                'province_id' => '33',
                'name' => 'KABUPATEN TEGAL',
                'alt_name' => 'KABUPATEN TEGAL',
                'latitude' => -7.03333,
                'longitude' => 109.16667,
            ),
        215 =>
            array (
                'id' => '3329',
                'province_id' => '33',
                'name' => 'KABUPATEN BREBES',
                'alt_name' => 'KABUPATEN BREBES',
                'latitude' => -7.05,
                'longitude' => 108.9,
            ),
        216 =>
            array (
                'id' => '3371',
                'province_id' => '33',
                'name' => 'KOTA MAGELANG',
                'alt_name' => 'KOTA MAGELANG',
                'latitude' => -7.5,
                'longitude' => 110.225,
            ),
        217 =>
            array (
                'id' => '3372',
                'province_id' => '33',
                'name' => 'KOTA SURAKARTA',
                'alt_name' => 'KOTA SURAKARTA',
                'latitude' => -7.55,
                'longitude' => 110.81667,
            ),
        218 =>
            array (
                'id' => '3373',
                'province_id' => '33',
                'name' => 'KOTA SALATIGA',
                'alt_name' => 'KOTA SALATIGA',
                'latitude' => -7.33278,
                'longitude' => 110.48333,
            ),
        219 =>
            array (
                'id' => '3374',
                'province_id' => '33',
                'name' => 'KOTA SEMARANG',
                'alt_name' => 'KOTA SEMARANG',
                'latitude' => -7.03333,
                'longitude' => 110.38333,
            ),
        220 =>
            array (
                'id' => '3375',
                'province_id' => '33',
                'name' => 'KOTA PEKALONGAN',
                'alt_name' => 'KOTA PEKALONGAN',
                'latitude' => -6.9,
                'longitude' => 109.68333,
            ),
        221 =>
            array (
                'id' => '3376',
                'province_id' => '33',
                'name' => 'KOTA TEGAL',
                'alt_name' => 'KOTA TEGAL',
                'latitude' => -6.8686,
                'longitude' => 109.1129,
            ),
        222 =>
            array (
                'id' => '3401',
                'province_id' => '34',
                'name' => 'KABUPATEN KULON PROGO',
                'alt_name' => 'KABUPATEN KULON PROGO',
                'latitude' => -7.645,
                'longitude' => 110.02694,
            ),
        223 =>
            array (
                'id' => '3402',
                'province_id' => '34',
                'name' => 'KABUPATEN BANTUL',
                'alt_name' => 'KABUPATEN BANTUL',
                'latitude' => -7.9,
                'longitude' => 110.36667,
            ),
        224 =>
            array (
                'id' => '3403',
                'province_id' => '34',
                'name' => 'KABUPATEN GUNUNG KIDUL',
                'alt_name' => 'KABUPATEN GUNUNG KIDUL',
                'latitude' => -7.98333,
                'longitude' => 110.61667,
            ),
        225 =>
            array (
                'id' => '3404',
                'province_id' => '34',
                'name' => 'KABUPATEN SLEMAN',
                'alt_name' => 'KABUPATEN SLEMAN',
                'latitude' => -7.68167,
                'longitude' => 110.32333,
            ),
        226 =>
            array (
                'id' => '3471',
                'province_id' => '34',
                'name' => 'KOTA YOGYAKARTA',
                'alt_name' => 'KOTA YOGYAKARTA',
                'latitude' => -7.8,
                'longitude' => 110.375,
            ),
        227 =>
            array (
                'id' => '3501',
                'province_id' => '35',
                'name' => 'KABUPATEN PACITAN',
                'alt_name' => 'KABUPATEN PACITAN',
                'latitude' => -8.13333,
                'longitude' => 111.16667,
            ),
        228 =>
            array (
                'id' => '3502',
                'province_id' => '35',
                'name' => 'KABUPATEN PONOROGO',
                'alt_name' => 'KABUPATEN PONOROGO',
                'latitude' => -7.93333,
                'longitude' => 111.5,
            ),
        229 =>
            array (
                'id' => '3503',
                'province_id' => '35',
                'name' => 'KABUPATEN TRENGGALEK',
                'alt_name' => 'KABUPATEN TRENGGALEK',
                'latitude' => -8.16667,
                'longitude' => 111.61667,
            ),
        230 =>
            array (
                'id' => '3504',
                'province_id' => '35',
                'name' => 'KABUPATEN TULUNGAGUNG',
                'alt_name' => 'KABUPATEN TULUNGAGUNG',
                'latitude' => -8.11667,
                'longitude' => 111.91667,
            ),
        231 =>
            array (
                'id' => '3505',
                'province_id' => '35',
                'name' => 'KABUPATEN BLITAR',
                'alt_name' => 'KABUPATEN BLITAR',
                'latitude' => -8.13333,
                'longitude' => 112.25,
            ),
        232 =>
            array (
                'id' => '3506',
                'province_id' => '35',
                'name' => 'KABUPATEN KEDIRI',
                'alt_name' => 'KABUPATEN KEDIRI',
                'latitude' => -7.83333,
                'longitude' => 112.16667,
            ),
        233 =>
            array (
                'id' => '3507',
                'province_id' => '35',
                'name' => 'KABUPATEN MALANG',
                'alt_name' => 'KABUPATEN MALANG',
                'latitude' => -8.16667,
                'longitude' => 112.66667,
            ),
        234 =>
            array (
                'id' => '3508',
                'province_id' => '35',
                'name' => 'KABUPATEN LUMAJANG',
                'alt_name' => 'KABUPATEN LUMAJANG',
                'latitude' => -8.11667,
                'longitude' => 113.15,
            ),
        235 =>
            array (
                'id' => '3509',
                'province_id' => '35',
                'name' => 'KABUPATEN JEMBER',
                'alt_name' => 'KABUPATEN JEMBER',
                'latitude' => -8.25,
                'longitude' => 113.65,
            ),
        236 =>
            array (
                'id' => '3510',
                'province_id' => '35',
                'name' => 'KABUPATEN BANYUWANGI',
                'alt_name' => 'KABUPATEN BANYUWANGI',
                'latitude' => -8.33333,
                'longitude' => 114.2,
            ),
        237 =>
            array (
                'id' => '3511',
                'province_id' => '35',
                'name' => 'KABUPATEN BONDOWOSO',
                'alt_name' => 'KABUPATEN BONDOWOSO',
                'latitude' => -7.9404,
                'longitude' => 113.9834,
            ),
        238 =>
            array (
                'id' => '3512',
                'province_id' => '35',
                'name' => 'KABUPATEN SITUBONDO',
                'alt_name' => 'KABUPATEN SITUBONDO',
                'latitude' => -7.71667,
                'longitude' => 114.05,
            ),
        239 =>
            array (
                'id' => '3513',
                'province_id' => '35',
                'name' => 'KABUPATEN PROBOLINGGO',
                'alt_name' => 'KABUPATEN PROBOLINGGO',
                'latitude' => -7.86667,
                'longitude' => 113.31667,
            ),
        240 =>
            array (
                'id' => '3514',
                'province_id' => '35',
                'name' => 'KABUPATEN PASURUAN',
                'alt_name' => 'KABUPATEN PASURUAN',
                'latitude' => -7.73333,
                'longitude' => 112.83333,
            ),
        241 =>
            array (
                'id' => '3515',
                'province_id' => '35',
                'name' => 'KABUPATEN SIDOARJO',
                'alt_name' => 'KABUPATEN SIDOARJO',
                'latitude' => -7.45,
                'longitude' => 112.7,
            ),
        242 =>
            array (
                'id' => '3516',
                'province_id' => '35',
                'name' => 'KABUPATEN MOJOKERTO',
                'alt_name' => 'KABUPATEN MOJOKERTO',
                'latitude' => -7.55,
                'longitude' => 112.5,
            ),
        243 =>
            array (
                'id' => '3517',
                'province_id' => '35',
                'name' => 'KABUPATEN JOMBANG',
                'alt_name' => 'KABUPATEN JOMBANG',
                'latitude' => -7.55,
                'longitude' => 112.25,
            ),
        244 =>
            array (
                'id' => '3518',
                'province_id' => '35',
                'name' => 'KABUPATEN NGANJUK',
                'alt_name' => 'KABUPATEN NGANJUK',
                'latitude' => -7.6,
                'longitude' => 111.93333,
            ),
        245 =>
            array (
                'id' => '3519',
                'province_id' => '35',
                'name' => 'KABUPATEN MADIUN',
                'alt_name' => 'KABUPATEN MADIUN',
                'latitude' => -7.61667,
                'longitude' => 111.65,
            ),
        246 =>
            array (
                'id' => '3520',
                'province_id' => '35',
                'name' => 'KABUPATEN MAGETAN',
                'alt_name' => 'KABUPATEN MAGETAN',
                'latitude' => -7.64472,
                'longitude' => 111.35917,
            ),
        247 =>
            array (
                'id' => '3521',
                'province_id' => '35',
                'name' => 'KABUPATEN NGAWI',
                'alt_name' => 'KABUPATEN NGAWI',
                'latitude' => -7.47444,
                'longitude' => 111.33444,
            ),
        248 =>
            array (
                'id' => '3522',
                'province_id' => '35',
                'name' => 'KABUPATEN BOJONEGORO',
                'alt_name' => 'KABUPATEN BOJONEGORO',
                'latitude' => -7.25,
                'longitude' => 111.8,
            ),
        249 =>
            array (
                'id' => '3523',
                'province_id' => '35',
                'name' => 'KABUPATEN TUBAN',
                'alt_name' => 'KABUPATEN TUBAN',
                'latitude' => -6.96667,
                'longitude' => 111.9,
            ),
        250 =>
            array (
                'id' => '3524',
                'province_id' => '35',
                'name' => 'KABUPATEN LAMONGAN',
                'alt_name' => 'KABUPATEN LAMONGAN',
                'latitude' => -7.13333,
                'longitude' => 112.31667,
            ),
        251 =>
            array (
                'id' => '3525',
                'province_id' => '35',
                'name' => 'KABUPATEN GRESIK',
                'alt_name' => 'KABUPATEN GRESIK',
                'latitude' => -7.1933,
                'longitude' => 112.553,
            ),
        252 =>
            array (
                'id' => '3526',
                'province_id' => '35',
                'name' => 'KABUPATEN BANGKALAN',
                'alt_name' => 'KABUPATEN BANGKALAN',
                'latitude' => -7.05,
                'longitude' => 112.93333,
            ),
        253 =>
            array (
                'id' => '3527',
                'province_id' => '35',
                'name' => 'KABUPATEN SAMPANG',
                'alt_name' => 'KABUPATEN SAMPANG',
                'latitude' => -7.05,
                'longitude' => 113.25,
            ),
        254 =>
            array (
                'id' => '3528',
                'province_id' => '35',
                'name' => 'KABUPATEN PAMEKASAN',
                'alt_name' => 'KABUPATEN PAMEKASAN',
                'latitude' => -7.06667,
                'longitude' => 113.5,
            ),
        255 =>
            array (
                'id' => '3529',
                'province_id' => '35',
                'name' => 'KABUPATEN SUMENEP',
                'alt_name' => 'KABUPATEN SUMENEP',
                'latitude' => -7.11667,
                'longitude' => 114.33333,
            ),
        256 =>
            array (
                'id' => '3571',
                'province_id' => '35',
                'name' => 'KOTA KEDIRI',
                'alt_name' => 'KOTA KEDIRI',
                'latitude' => -7.83333,
                'longitude' => 112.01667,
            ),
        257 =>
            array (
                'id' => '3572',
                'province_id' => '35',
                'name' => 'KOTA BLITAR',
                'alt_name' => 'KOTA BLITAR',
                'latitude' => -8.1,
                'longitude' => 112.16667,
            ),
        258 =>
            array (
                'id' => '3573',
                'province_id' => '35',
                'name' => 'KOTA MALANG',
                'alt_name' => 'KOTA MALANG',
                'latitude' => -7.975,
                'longitude' => 112.63333,
            ),
        259 =>
            array (
                'id' => '3574',
                'province_id' => '35',
                'name' => 'KOTA PROBOLINGGO',
                'alt_name' => 'KOTA PROBOLINGGO',
                'latitude' => -7.78333,
                'longitude' => 113.21667,
            ),
        260 =>
            array (
                'id' => '3575',
                'province_id' => '35',
                'name' => 'KOTA PASURUAN',
                'alt_name' => 'KOTA PASURUAN',
                'latitude' => -7.65,
                'longitude' => 112.9,
            ),
        261 =>
            array (
                'id' => '3576',
                'province_id' => '35',
                'name' => 'KOTA MOJOKERTO',
                'alt_name' => 'KOTA MOJOKERTO',
                'latitude' => -7.46667,
                'longitude' => 112.43333,
            ),
        262 =>
            array (
                'id' => '3577',
                'province_id' => '35',
                'name' => 'KOTA MADIUN',
                'alt_name' => 'KOTA MADIUN',
                'latitude' => -7.63333,
                'longitude' => 111.53333,
            ),
        263 =>
            array (
                'id' => '3578',
                'province_id' => '35',
                'name' => 'KOTA SURABAYA',
                'alt_name' => 'KOTA SURABAYA',
                'latitude' => -7.26667,
                'longitude' => 112.71667,
            ),
        264 =>
            array (
                'id' => '3579',
                'province_id' => '35',
                'name' => 'KOTA BATU',
                'alt_name' => 'KOTA BATU',
                'latitude' => -7.83272,
                'longitude' => 112.53751,
            ),
        265 =>
            array (
                'id' => '3601',
                'province_id' => '36',
                'name' => 'KABUPATEN PANDEGLANG',
                'alt_name' => 'KABUPATEN PANDEGLANG',
                'latitude' => -6.63333,
                'longitude' => 105.75,
            ),
        266 =>
            array (
                'id' => '3602',
                'province_id' => '36',
                'name' => 'KABUPATEN LEBAK',
                'alt_name' => 'KABUPATEN LEBAK',
                'latitude' => -6.65,
                'longitude' => 106.21667,
            ),
        267 =>
            array (
                'id' => '3603',
                'province_id' => '36',
                'name' => 'KABUPATEN TANGERANG',
                'alt_name' => 'KABUPATEN TANGERANG',
                'latitude' => -6.2,
                'longitude' => 106.46667,
            ),
        268 =>
            array (
                'id' => '3604',
                'province_id' => '36',
                'name' => 'KABUPATEN SERANG',
                'alt_name' => 'KABUPATEN SERANG',
                'latitude' => -6.15,
                'longitude' => 106,
            ),
        269 =>
            array (
                'id' => '3671',
                'province_id' => '36',
                'name' => 'KOTA TANGERANG',
                'alt_name' => 'KOTA TANGERANG',
                'latitude' => -6.17944,
                'longitude' => 106.62991,
            ),
        270 =>
            array (
                'id' => '3672',
                'province_id' => '36',
                'name' => 'KOTA CILEGON',
                'alt_name' => 'KOTA CILEGON',
                'latitude' => -6.01667,
                'longitude' => 106.01667,
            ),
        271 =>
            array (
                'id' => '3673',
                'province_id' => '36',
                'name' => 'KOTA SERANG',
                'alt_name' => 'KOTA SERANG',
                'latitude' => -6.12563,
                'longitude' => 106.14999,
            ),
        272 =>
            array (
                'id' => '3674',
                'province_id' => '36',
                'name' => 'KOTA TANGERANG SELATAN',
                'alt_name' => 'KOTA TANGERANG SELATAN',
                'latitude' => -6.29373,
                'longitude' => 106.71244,
            ),
        273 =>
            array (
                'id' => '5101',
                'province_id' => '51',
                'name' => 'KABUPATEN JEMBRANA',
                'alt_name' => 'KABUPATEN JEMBRANA',
                'latitude' => -8.3,
                'longitude' => 114.66667,
            ),
        274 =>
            array (
                'id' => '5102',
                'province_id' => '51',
                'name' => 'KABUPATEN TABANAN',
                'alt_name' => 'KABUPATEN TABANAN',
                'latitude' => -8.43333,
                'longitude' => 115.06667,
            ),
        275 =>
            array (
                'id' => '5103',
                'province_id' => '51',
                'name' => 'KABUPATEN BADUNG',
                'alt_name' => 'KABUPATEN BADUNG',
                'latitude' => -8.51667,
                'longitude' => 115.2,
            ),
        276 =>
            array (
                'id' => '5104',
                'province_id' => '51',
                'name' => 'KABUPATEN GIANYAR',
                'alt_name' => 'KABUPATEN GIANYAR',
                'latitude' => -8.46667,
                'longitude' => 115.28333,
            ),
        277 =>
            array (
                'id' => '5105',
                'province_id' => '51',
                'name' => 'KABUPATEN KLUNGKUNG',
                'alt_name' => 'KABUPATEN KLUNGKUNG',
                'latitude' => -8.55,
                'longitude' => 115.4,
            ),
        278 =>
            array (
                'id' => '5106',
                'province_id' => '51',
                'name' => 'KABUPATEN BANGLI',
                'alt_name' => 'KABUPATEN BANGLI',
                'latitude' => -8.28333,
                'longitude' => 115.35,
            ),
        279 =>
            array (
                'id' => '5107',
                'province_id' => '51',
                'name' => 'KABUPATEN KARANG ASEM',
                'alt_name' => 'KABUPATEN KARANG ASEM',
                'latitude' => -8.3891,
                'longitude' => 115.5393,
            ),
        280 =>
            array (
                'id' => '5108',
                'province_id' => '51',
                'name' => 'KABUPATEN BULELENG',
                'alt_name' => 'KABUPATEN BULELENG',
                'latitude' => -8.25,
                'longitude' => 114.96667,
            ),
        281 =>
            array (
                'id' => '5171',
                'province_id' => '51',
                'name' => 'KOTA DENPASAR',
                'alt_name' => 'KOTA DENPASAR',
                'latitude' => -8.66667,
                'longitude' => 115.21663,
            ),
        282 =>
            array (
                'id' => '5201',
                'province_id' => '52',
                'name' => 'KABUPATEN LOMBOK BARAT',
                'alt_name' => 'KABUPATEN LOMBOK BARAT',
                'latitude' => -8.69583,
                'longitude' => 116.11667,
            ),
        283 =>
            array (
                'id' => '5202',
                'province_id' => '52',
                'name' => 'KABUPATEN LOMBOK TENGAH',
                'alt_name' => 'KABUPATEN LOMBOK TENGAH',
                'latitude' => -8.7,
                'longitude' => 116.3,
            ),
        284 =>
            array (
                'id' => '5203',
                'province_id' => '52',
                'name' => 'KABUPATEN LOMBOK TIMUR',
                'alt_name' => 'KABUPATEN LOMBOK TIMUR',
                'latitude' => -8.53333,
                'longitude' => 116.53333,
            ),
        285 =>
            array (
                'id' => '5204',
                'province_id' => '52',
                'name' => 'KABUPATEN SUMBAWA',
                'alt_name' => 'KABUPATEN SUMBAWA',
                'latitude' => -8.7439,
                'longitude' => 117.3324,
            ),
        286 =>
            array (
                'id' => '5205',
                'province_id' => '52',
                'name' => 'KABUPATEN DOMPU',
                'alt_name' => 'KABUPATEN DOMPU',
                'latitude' => -8.5094,
                'longitude' => 118.4816,
            ),
        287 =>
            array (
                'id' => '5206',
                'province_id' => '52',
                'name' => 'KABUPATEN BIMA',
                'alt_name' => 'KABUPATEN BIMA',
                'latitude' => -8.6,
                'longitude' => 118.61667,
            ),
        288 =>
            array (
                'id' => '5207',
                'province_id' => '52',
                'name' => 'KABUPATEN SUMBAWA BARAT',
                'alt_name' => 'KABUPATEN SUMBAWA BARAT',
                'latitude' => -8.75159,
                'longitude' => 116.92132,
            ),
        289 =>
            array (
                'id' => '5208',
                'province_id' => '52',
                'name' => 'KABUPATEN LOMBOK UTARA',
                'alt_name' => 'KABUPATEN LOMBOK UTARA',
                'latitude' => -8.35214,
                'longitude' => 116.40152,
            ),
        290 =>
            array (
                'id' => '5271',
                'province_id' => '52',
                'name' => 'KOTA MATARAM',
                'alt_name' => 'KOTA MATARAM',
                'latitude' => -8.5833,
                'longitude' => 116.1167,
            ),
        291 =>
            array (
                'id' => '5272',
                'province_id' => '52',
                'name' => 'KOTA BIMA',
                'alt_name' => 'KOTA BIMA',
                'latitude' => -8.46728,
                'longitude' => 118.75259,
            ),
        292 =>
            array (
                'id' => '5301',
                'province_id' => '53',
                'name' => 'KABUPATEN SUMBA BARAT',
                'alt_name' => 'KABUPATEN SUMBA BARAT',
                'latitude' => -9.56667,
                'longitude' => 119.45,
            ),
        293 =>
            array (
                'id' => '5302',
                'province_id' => '53',
                'name' => 'KABUPATEN SUMBA TIMUR',
                'alt_name' => 'KABUPATEN SUMBA TIMUR',
                'latitude' => -9.88333,
                'longitude' => 120.25,
            ),
        294 =>
            array (
                'id' => '5303',
                'province_id' => '53',
                'name' => 'KABUPATEN KUPANG',
                'alt_name' => 'KABUPATEN KUPANG',
                'latitude' => -9.91667,
                'longitude' => 123.83333,
            ),
        295 =>
            array (
                'id' => '5304',
                'province_id' => '53',
                'name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'alt_name' => 'KABUPATEN TIMOR TENGAH SELATAN',
                'latitude' => -9.83333,
                'longitude' => 124.4,
            ),
        296 =>
            array (
                'id' => '5305',
                'province_id' => '53',
                'name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'alt_name' => 'KABUPATEN TIMOR TENGAH UTARA',
                'latitude' => -9.33136,
                'longitude' => 124.51904,
            ),
        297 =>
            array (
                'id' => '5306',
                'province_id' => '53',
                'name' => 'KABUPATEN BELU',
                'alt_name' => 'KABUPATEN BELU',
                'latitude' => -9.41258,
                'longitude' => 124.95066,
            ),
        298 =>
            array (
                'id' => '5307',
                'province_id' => '53',
                'name' => 'KABUPATEN ALOR',
                'alt_name' => 'KABUPATEN ALOR',
                'latitude' => -8.3,
                'longitude' => 124.56667,
            ),
        299 =>
            array (
                'id' => '5308',
                'province_id' => '53',
                'name' => 'KABUPATEN LEMBATA',
                'alt_name' => 'KABUPATEN LEMBATA',
                'latitude' => -8.41396,
                'longitude' => 123.55225,
            ),
        300 =>
            array (
                'id' => '5309',
                'province_id' => '53',
                'name' => 'KABUPATEN FLORES TIMUR',
                'alt_name' => 'KABUPATEN FLORES TIMUR',
                'latitude' => -8.24224,
                'longitude' => 122.96817,
            ),
        301 =>
            array (
                'id' => '5310',
                'province_id' => '53',
                'name' => 'KABUPATEN SIKKA',
                'alt_name' => 'KABUPATEN SIKKA',
                'latitude' => -8.66667,
                'longitude' => 122.36667,
            ),
        302 =>
            array (
                'id' => '5311',
                'province_id' => '53',
                'name' => 'KABUPATEN ENDE',
                'alt_name' => 'KABUPATEN ENDE',
                'latitude' => -8.84056,
                'longitude' => 121.66389,
            ),
        303 =>
            array (
                'id' => '5312',
                'province_id' => '53',
                'name' => 'KABUPATEN NGADA',
                'alt_name' => 'KABUPATEN NGADA',
                'latitude' => -8.66667,
                'longitude' => 121,
            ),
        304 =>
            array (
                'id' => '5313',
                'province_id' => '53',
                'name' => 'KABUPATEN MANGGARAI',
                'alt_name' => 'KABUPATEN MANGGARAI',
                'latitude' => -8.56667,
                'longitude' => 120.41667,
            ),
        305 =>
            array (
                'id' => '5314',
                'province_id' => '53',
                'name' => 'KABUPATEN ROTE NDAO',
                'alt_name' => 'KABUPATEN ROTE NDAO',
                'latitude' => -10.73617,
                'longitude' => 123.12054,
            ),
        306 =>
            array (
                'id' => '5315',
                'province_id' => '53',
                'name' => 'KABUPATEN MANGGARAI BARAT',
                'alt_name' => 'KABUPATEN MANGGARAI BARAT',
                'latitude' => -8.64484,
                'longitude' => 119.88281,
            ),
        307 =>
            array (
                'id' => '5316',
                'province_id' => '53',
                'name' => 'KABUPATEN SUMBA TENGAH',
                'alt_name' => 'KABUPATEN SUMBA TENGAH',
                'latitude' => -9.62941,
                'longitude' => 119.61914,
            ),
        308 =>
            array (
                'id' => '5317',
                'province_id' => '53',
                'name' => 'KABUPATEN SUMBA BARAT DAYA',
                'alt_name' => 'KABUPATEN SUMBA BARAT DAYA',
                'latitude' => -9.56216,
                'longitude' => 119.08905,
            ),
        309 =>
            array (
                'id' => '5318',
                'province_id' => '53',
                'name' => 'KABUPATEN NAGEKEO',
                'alt_name' => 'KABUPATEN NAGEKEO',
                'latitude' => -8.8721,
                'longitude' => 121.20963,
            ),
        310 =>
            array (
                'id' => '5319',
                'province_id' => '53',
                'name' => 'KABUPATEN MANGGARAI TIMUR',
                'alt_name' => 'KABUPATEN MANGGARAI TIMUR',
                'latitude' => -8.55533,
                'longitude' => 120.59761,
            ),
        311 =>
            array (
                'id' => '5320',
                'province_id' => '53',
                'name' => 'KABUPATEN SABU RAIJUA',
                'alt_name' => 'KABUPATEN SABU RAIJUA',
                'latitude' => -10.56286,
                'longitude' => 121.78894,
            ),
        312 =>
            array (
                'id' => '5321',
                'province_id' => '53',
                'name' => 'KABUPATEN MALAKA',
                'alt_name' => 'KABUPATEN MALAKA',
                'latitude' => -9.5632,
                'longitude' => 124.89481,
            ),
        313 =>
            array (
                'id' => '5371',
                'province_id' => '53',
                'name' => 'KOTA KUPANG',
                'alt_name' => 'KOTA KUPANG',
                'latitude' => -10.21667,
                'longitude' => 123.6,
            ),
        314 =>
            array (
                'id' => '6101',
                'province_id' => '61',
                'name' => 'KABUPATEN SAMBAS',
                'alt_name' => 'KABUPATEN SAMBAS',
                'latitude' => 1.41667,
                'longitude' => 109.33333,
            ),
        315 =>
            array (
                'id' => '6102',
                'province_id' => '61',
                'name' => 'KABUPATEN BENGKAYANG',
                'alt_name' => 'KABUPATEN BENGKAYANG',
                'latitude' => 1.06911,
                'longitude' => 109.66393,
            ),
        316 =>
            array (
                'id' => '6103',
                'province_id' => '61',
                'name' => 'KABUPATEN LANDAK',
                'alt_name' => 'KABUPATEN LANDAK',
                'latitude' => 0.42373,
                'longitude' => 109.75917,
            ),
        317 =>
            array (
                'id' => '6104',
                'province_id' => '61',
                'name' => 'KABUPATEN MEMPAWAH',
                'alt_name' => 'KABUPATEN MEMPAWAH',
                'latitude' => 0.25,
                'longitude' => 109.16667,
            ),
        318 =>
            array (
                'id' => '6105',
                'province_id' => '61',
                'name' => 'KABUPATEN SANGGAU',
                'alt_name' => 'KABUPATEN SANGGAU',
                'latitude' => 0.25472,
                'longitude' => 110.45,
            ),
        319 =>
            array (
                'id' => '6106',
                'province_id' => '61',
                'name' => 'KABUPATEN KETAPANG',
                'alt_name' => 'KABUPATEN KETAPANG',
                'latitude' => -1.58333,
                'longitude' => 110.5,
            ),
        320 =>
            array (
                'id' => '6107',
                'province_id' => '61',
                'name' => 'KABUPATEN SINTANG',
                'alt_name' => 'KABUPATEN SINTANG',
                'latitude' => -0.08333,
                'longitude' => 112.08333,
            ),
        321 =>
            array (
                'id' => '6108',
                'province_id' => '61',
                'name' => 'KABUPATEN KAPUAS HULU',
                'alt_name' => 'KABUPATEN KAPUAS HULU',
                'latitude' => 0.81667,
                'longitude' => 112.76667,
            ),
        322 =>
            array (
                'id' => '6109',
                'province_id' => '61',
                'name' => 'KABUPATEN SEKADAU',
                'alt_name' => 'KABUPATEN SEKADAU',
                'latitude' => 0.03485,
                'longitude' => 110.95066,
            ),
        323 =>
            array (
                'id' => '6110',
                'province_id' => '61',
                'name' => 'KABUPATEN MELAWI',
                'alt_name' => 'KABUPATEN MELAWI',
                'latitude' => -0.33617,
                'longitude' => 111.698,
            ),
        324 =>
            array (
                'id' => '6111',
                'province_id' => '61',
                'name' => 'KABUPATEN KAYONG UTARA',
                'alt_name' => 'KABUPATEN KAYONG UTARA',
                'latitude' => -1.43711,
                'longitude' => 110.79781,
            ),
        325 =>
            array (
                'id' => '6112',
                'province_id' => '61',
                'name' => 'KABUPATEN KUBU RAYA',
                'alt_name' => 'KABUPATEN KUBU RAYA',
                'latitude' => 0.01637,
                'longitude' => 109.33731,
            ),
        326 =>
            array (
                'id' => '6171',
                'province_id' => '61',
                'name' => 'KOTA PONTIANAK',
                'alt_name' => 'KOTA PONTIANAK',
                'latitude' => -0.08333,
                'longitude' => 109.36667,
            ),
        327 =>
            array (
                'id' => '6172',
                'province_id' => '61',
                'name' => 'KOTA SINGKAWANG',
                'alt_name' => 'KOTA SINGKAWANG',
                'latitude' => 0.90734,
                'longitude' => 109.00103,
            ),
        328 =>
            array (
                'id' => '6201',
                'province_id' => '62',
                'name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'alt_name' => 'KABUPATEN KOTAWARINGIN BARAT',
                'latitude' => -2.4,
                'longitude' => 111.73333,
            ),
        329 =>
            array (
                'id' => '6202',
                'province_id' => '62',
                'name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'alt_name' => 'KABUPATEN KOTAWARINGIN TIMUR',
                'latitude' => -2.08333,
                'longitude' => 112.75,
            ),
        330 =>
            array (
                'id' => '6203',
                'province_id' => '62',
                'name' => 'KABUPATEN KAPUAS',
                'alt_name' => 'KABUPATEN KAPUAS',
                'latitude' => -2.01667,
                'longitude' => 114.38333,
            ),
        331 =>
            array (
                'id' => '6204',
                'province_id' => '62',
                'name' => 'KABUPATEN BARITO SELATAN',
                'alt_name' => 'KABUPATEN BARITO SELATAN',
                'latitude' => -1.86667,
                'longitude' => 114.73333,
            ),
        332 =>
            array (
                'id' => '6205',
                'province_id' => '62',
                'name' => 'KABUPATEN BARITO UTARA',
                'alt_name' => 'KABUPATEN BARITO UTARA',
                'latitude' => -0.98333,
                'longitude' => 115.1,
            ),
        333 =>
            array (
                'id' => '6206',
                'province_id' => '62',
                'name' => 'KABUPATEN SUKAMARA',
                'alt_name' => 'KABUPATEN SUKAMARA',
                'latitude' => -2.62675,
                'longitude' => 111.23681,
            ),
        334 =>
            array (
                'id' => '6207',
                'province_id' => '62',
                'name' => 'KABUPATEN LAMANDAU',
                'alt_name' => 'KABUPATEN LAMANDAU',
                'latitude' => -1.83828,
                'longitude' => 111.2869,
            ),
        335 =>
            array (
                'id' => '6208',
                'province_id' => '62',
                'name' => 'KABUPATEN SERUYAN',
                'alt_name' => 'KABUPATEN SERUYAN',
                'latitude' => -2.33333,
                'longitude' => 112.25,
            ),
        336 =>
            array (
                'id' => '6209',
                'province_id' => '62',
                'name' => 'KABUPATEN KATINGAN',
                'alt_name' => 'KABUPATEN KATINGAN',
                'latitude' => -2.06667,
                'longitude' => 113.4,
            ),
        337 =>
            array (
                'id' => '6210',
                'province_id' => '62',
                'name' => 'KABUPATEN PULANG PISAU',
                'alt_name' => 'KABUPATEN PULANG PISAU',
                'latitude' => -3.11858,
                'longitude' => 113.8623,
            ),
        338 =>
            array (
                'id' => '6211',
                'province_id' => '62',
                'name' => 'KABUPATEN GUNUNG MAS',
                'alt_name' => 'KABUPATEN GUNUNG MAS',
                'latitude' => -0.95,
                'longitude' => 113.5,
            ),
        339 =>
            array (
                'id' => '6212',
                'province_id' => '62',
                'name' => 'KABUPATEN BARITO TIMUR',
                'alt_name' => 'KABUPATEN BARITO TIMUR',
                'latitude' => -1.93333,
                'longitude' => 115.1,
            ),
        340 =>
            array (
                'id' => '6213',
                'province_id' => '62',
                'name' => 'KABUPATEN MURUNG RAYA',
                'alt_name' => 'KABUPATEN MURUNG RAYA',
                'latitude' => -0.01667,
                'longitude' => 114.26667,
            ),
        341 =>
            array (
                'id' => '6271',
                'province_id' => '62',
                'name' => 'KOTA PALANGKA RAYA',
                'alt_name' => 'KOTA PALANGKA RAYA',
                'latitude' => -1.76979,
                'longitude' => 113.73126,
            ),
        342 =>
            array (
                'id' => '6301',
                'province_id' => '63',
                'name' => 'KABUPATEN TANAH LAUT',
                'alt_name' => 'KABUPATEN TANAH LAUT',
                'latitude' => -3.88333,
                'longitude' => 114.86667,
            ),
        343 =>
            array (
                'id' => '6302',
                'province_id' => '63',
                'name' => 'KABUPATEN KOTA BARU',
                'alt_name' => 'KABUPATEN KOTA BARU',
                'latitude' => -3,
                'longitude' => 116,
            ),
        344 =>
            array (
                'id' => '6303',
                'province_id' => '63',
                'name' => 'KABUPATEN BANJAR',
                'alt_name' => 'KABUPATEN BANJAR',
                'latitude' => -3.31667,
                'longitude' => 115.08333,
            ),
        345 =>
            array (
                'id' => '6304',
                'province_id' => '63',
                'name' => 'KABUPATEN BARITO KUALA',
                'alt_name' => 'KABUPATEN BARITO KUALA',
                'latitude' => -3.08333,
                'longitude' => 114.61667,
            ),
        346 =>
            array (
                'id' => '6305',
                'province_id' => '63',
                'name' => 'KABUPATEN TAPIN',
                'alt_name' => 'KABUPATEN TAPIN',
                'latitude' => -2.91667,
                'longitude' => 115.03333,
            ),
        347 =>
            array (
                'id' => '6306',
                'province_id' => '63',
                'name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'alt_name' => 'KABUPATEN HULU SUNGAI SELATAN',
                'latitude' => -2.75,
                'longitude' => 115.2,
            ),
        348 =>
            array (
                'id' => '6307',
                'province_id' => '63',
                'name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'alt_name' => 'KABUPATEN HULU SUNGAI TENGAH',
                'latitude' => -2.61667,
                'longitude' => 115.41667,
            ),
        349 =>
            array (
                'id' => '6308',
                'province_id' => '63',
                'name' => 'KABUPATEN HULU SUNGAI UTARA',
                'alt_name' => 'KABUPATEN HULU SUNGAI UTARA',
                'latitude' => -2.45,
                'longitude' => 115.13333,
            ),
        350 =>
            array (
                'id' => '6309',
                'province_id' => '63',
                'name' => 'KABUPATEN TABALONG',
                'alt_name' => 'KABUPATEN TABALONG',
                'latitude' => -1.88333,
                'longitude' => 115.5,
            ),
        351 =>
            array (
                'id' => '6310',
                'province_id' => '63',
                'name' => 'KABUPATEN TANAH BUMBU',
                'alt_name' => 'KABUPATEN TANAH BUMBU',
                'latitude' => -3.45413,
                'longitude' => 115.70372,
            ),
        352 =>
            array (
                'id' => '6311',
                'province_id' => '63',
                'name' => 'KABUPATEN BALANGAN',
                'alt_name' => 'KABUPATEN BALANGAN',
                'latitude' => -2.32314,
                'longitude' => 115.62922,
            ),
        353 =>
            array (
                'id' => '6371',
                'province_id' => '63',
                'name' => 'KOTA BANJARMASIN',
                'alt_name' => 'KOTA BANJARMASIN',
                'latitude' => -3.32444,
                'longitude' => 114.59102,
            ),
        354 =>
            array (
                'id' => '6372',
                'province_id' => '63',
                'name' => 'KOTA BANJAR BARU',
                'alt_name' => 'KOTA BANJAR BARU',
                'latitude' => -3.41667,
                'longitude' => 114.83333,
            ),
        355 =>
            array (
                'id' => '6401',
                'province_id' => '64',
                'name' => 'KABUPATEN PASER',
                'alt_name' => 'KABUPATEN PASER',
                'latitude' => -1.43517,
                'longitude' => 116.23535,
            ),
        356 =>
            array (
                'id' => '6402',
                'province_id' => '64',
                'name' => 'KABUPATEN KUTAI BARAT',
                'alt_name' => 'KABUPATEN KUTAI BARAT',
                'latitude' => -0.59417,
                'longitude' => 115.51575,
            ),
        357 =>
            array (
                'id' => '6403',
                'province_id' => '64',
                'name' => 'KABUPATEN KUTAI KARTANEGARA',
                'alt_name' => 'KABUPATEN KUTAI KARTANEGARA',
                'latitude' => -0.44019,
                'longitude' => 116.98139,
            ),
        358 =>
            array (
                'id' => '6404',
                'province_id' => '64',
                'name' => 'KABUPATEN KUTAI TIMUR',
                'alt_name' => 'KABUPATEN KUTAI TIMUR',
                'latitude' => 1.03769,
                'longitude' => 117.83112,
            ),
        359 =>
            array (
                'id' => '6405',
                'province_id' => '64',
                'name' => 'KABUPATEN BERAU',
                'alt_name' => 'KABUPATEN BERAU',
                'latitude' => 2,
                'longitude' => 117.3,
            ),
        360 =>
            array (
                'id' => '6409',
                'province_id' => '64',
                'name' => 'KABUPATEN PENAJAM PASER UTARA',
                'alt_name' => 'KABUPATEN PENAJAM PASER UTARA',
                'latitude' => -1.25,
                'longitude' => 116.83333,
            ),
        361 =>
            array (
                'id' => '6411',
                'province_id' => '64',
                'name' => 'KABUPATEN MAHAKAM HULU',
                'alt_name' => 'KABUPATEN MAHAKAM HULU',
                'latitude' => 0.37822,
                'longitude' => 115.38048,
            ),
        362 =>
            array (
                'id' => '6471',
                'province_id' => '64',
                'name' => 'KOTA BALIKPAPAN',
                'alt_name' => 'KOTA BALIKPAPAN',
                'latitude' => -1.16667,
                'longitude' => 116.88333,
            ),
        363 =>
            array (
                'id' => '6472',
                'province_id' => '64',
                'name' => 'KOTA SAMARINDA',
                'alt_name' => 'KOTA SAMARINDA',
                'latitude' => -0.43333,
                'longitude' => 117.18333,
            ),
        364 =>
            array (
                'id' => '6474',
                'province_id' => '64',
                'name' => 'KOTA BONTANG',
                'alt_name' => 'KOTA BONTANG',
                'latitude' => 0.12526,
                'longitude' => 117.49603,
            ),
        365 =>
            array (
                'id' => '6501',
                'province_id' => '65',
                'name' => 'KABUPATEN MALINAU',
                'alt_name' => 'KABUPATEN MALINAU',
                'latitude' => 2.45,
                'longitude' => 115.68333,
            ),
        366 =>
            array (
                'id' => '6502',
                'province_id' => '65',
                'name' => 'KABUPATEN BULUNGAN',
                'alt_name' => 'KABUPATEN BULUNGAN',
                'latitude' => 3,
                'longitude' => 117.16667,
            ),
        367 =>
            array (
                'id' => '6503',
                'province_id' => '65',
                'name' => 'KABUPATEN TANA TIDUNG',
                'alt_name' => 'KABUPATEN TANA TIDUNG',
                'latitude' => 3.55,
                'longitude' => 117.25,
            ),
        368 =>
            array (
                'id' => '6504',
                'province_id' => '65',
                'name' => 'KABUPATEN NUNUKAN',
                'alt_name' => 'KABUPATEN NUNUKAN',
                'latitude' => 4.13333,
                'longitude' => 116.7,
            ),
        369 =>
            array (
                'id' => '6571',
                'province_id' => '65',
                'name' => 'KOTA TARAKAN',
                'alt_name' => 'KOTA TARAKAN',
                'latitude' => 3.36667,
                'longitude' => 117.6,
            ),
        370 =>
            array (
                'id' => '7101',
                'province_id' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW',
                'alt_name' => 'KABUPATEN BOLAANG MONGONDOW',
                'latitude' => 0.75,
                'longitude' => 124.08333,
            ),
        371 =>
            array (
                'id' => '7102',
                'province_id' => '71',
                'name' => 'KABUPATEN MINAHASA',
                'alt_name' => 'KABUPATEN MINAHASA',
                'latitude' => 1.2537,
                'longitude' => 124.83,
            ),
        372 =>
            array (
                'id' => '7103',
                'province_id' => '71',
                'name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'alt_name' => 'KABUPATEN KEPULAUAN SANGIHE',
                'latitude' => 3.5,
                'longitude' => 125.55,
            ),
        373 =>
            array (
                'id' => '7104',
                'province_id' => '71',
                'name' => 'KABUPATEN KEPULAUAN TALAUD',
                'alt_name' => 'KABUPATEN KEPULAUAN TALAUD',
                'latitude' => 4.31178,
                'longitude' => 126.78085,
            ),
        374 =>
            array (
                'id' => '7105',
                'province_id' => '71',
                'name' => 'KABUPATEN MINAHASA SELATAN',
                'alt_name' => 'KABUPATEN MINAHASA SELATAN',
                'latitude' => 1.21291,
                'longitude' => 124.59708,
            ),
        375 =>
            array (
                'id' => '7106',
                'province_id' => '71',
                'name' => 'KABUPATEN MINAHASA UTARA',
                'alt_name' => 'KABUPATEN MINAHASA UTARA',
                'latitude' => 1.4025,
                'longitude' => 124.96,
            ),
        376 =>
            array (
                'id' => '7107',
                'province_id' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'alt_name' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
                'latitude' => 0.78527,
                'longitude' => 123.41766,
            ),
        377 =>
            array (
                'id' => '7108',
                'province_id' => '71',
                'name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'alt_name' => 'KABUPATEN SIAU TAGULANDANG BIARO',
                'latitude' => 2.11728,
                'longitude' => 125.37512,
            ),
        378 =>
            array (
                'id' => '7109',
                'province_id' => '71',
                'name' => 'KABUPATEN MINAHASA TENGGARA',
                'alt_name' => 'KABUPATEN MINAHASA TENGGARA',
                'latitude' => 1.05633,
                'longitude' => 124.7925,
            ),
        379 =>
            array (
                'id' => '7110',
                'province_id' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'alt_name' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
                'latitude' => 0.40912,
                'longitude' => 123.75961,
            ),
        380 =>
            array (
                'id' => '7111',
                'province_id' => '71',
                'name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'alt_name' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
                'latitude' => 0.72073,
                'longitude' => 124.50256,
            ),
        381 =>
            array (
                'id' => '7171',
                'province_id' => '71',
                'name' => 'KOTA MANADO',
                'alt_name' => 'KOTA MANADO',
                'latitude' => 1.51667,
                'longitude' => 124.88333,
            ),
        382 =>
            array (
                'id' => '7172',
                'province_id' => '71',
                'name' => 'KOTA BITUNG',
                'alt_name' => 'KOTA BITUNG',
                'latitude' => 1.48333,
                'longitude' => 125.15,
            ),
        383 =>
            array (
                'id' => '7173',
                'province_id' => '71',
                'name' => 'KOTA TOMOHON',
                'alt_name' => 'KOTA TOMOHON',
                'latitude' => 1.31307,
                'longitude' => 124.83404,
            ),
        384 =>
            array (
                'id' => '7174',
                'province_id' => '71',
                'name' => 'KOTA KOTAMOBAGU',
                'alt_name' => 'KOTA KOTAMOBAGU',
                'latitude' => 0.68915,
                'longitude' => 124.32678,
            ),
        385 =>
            array (
                'id' => '7201',
                'province_id' => '72',
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'alt_name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'latitude' => -1.6424,
                'longitude' => 123.54881,
            ),
        386 =>
            array (
                'id' => '7202',
                'province_id' => '72',
                'name' => 'KABUPATEN BANGGAI',
                'alt_name' => 'KABUPATEN BANGGAI',
                'latitude' => -1.2835,
                'longitude' => 122.8892,
            ),
        387 =>
            array (
                'id' => '7203',
                'province_id' => '72',
                'name' => 'KABUPATEN MOROWALI',
                'alt_name' => 'KABUPATEN MOROWALI',
                'latitude' => -1.89342,
                'longitude' => 121.25473,
            ),
        388 =>
            array (
                'id' => '7204',
                'province_id' => '72',
                'name' => 'KABUPATEN POSO',
                'alt_name' => 'KABUPATEN POSO',
                'latitude' => -1.65,
                'longitude' => 120.5,
            ),
        389 =>
            array (
                'id' => '7205',
                'province_id' => '72',
                'name' => 'KABUPATEN DONGGALA',
                'alt_name' => 'KABUPATEN DONGGALA',
                'latitude' => -0.58333,
                'longitude' => 119.85,
            ),
        390 =>
            array (
                'id' => '7206',
                'province_id' => '72',
                'name' => 'KABUPATEN TOLI-TOLI',
                'alt_name' => 'KABUPATEN TOLI-TOLI',
                'latitude' => 1.30862,
                'longitude' => 120.88643,
            ),
        391 =>
            array (
                'id' => '7207',
                'province_id' => '72',
                'name' => 'KABUPATEN BUOL',
                'alt_name' => 'KABUPATEN BUOL',
                'latitude' => 0.75,
                'longitude' => 120.75,
            ),
        392 =>
            array (
                'id' => '7208',
                'province_id' => '72',
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'alt_name' => 'KABUPATEN PARIGI MOUTONG',
                'latitude' => 0.3368,
                'longitude' => 120.17841,
            ),
        393 =>
            array (
                'id' => '7209',
                'province_id' => '72',
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'alt_name' => 'KABUPATEN TOJO UNA-UNA',
                'latitude' => -1.2036,
                'longitude' => 121.48201,
            ),
        394 =>
            array (
                'id' => '7210',
                'province_id' => '72',
                'name' => 'KABUPATEN SIGI',
                'alt_name' => 'KABUPATEN SIGI',
                'latitude' => -1.385,
                'longitude' => 119.96694,
            ),
        395 =>
            array (
                'id' => '7211',
                'province_id' => '72',
                'name' => 'KABUPATEN BANGGAI LAUT',
                'alt_name' => 'KABUPATEN BANGGAI LAUT',
                'latitude' => -1.61841,
                'longitude' => 123.49388,
            ),
        396 =>
            array (
                'id' => '7212',
                'province_id' => '72',
                'name' => 'KABUPATEN MOROWALI UTARA',
                'alt_name' => 'KABUPATEN MOROWALI UTARA',
                'latitude' => -1.7207,
                'longitude' => 121.24649,
            ),
        397 =>
            array (
                'id' => '7271',
                'province_id' => '72',
                'name' => 'KOTA PALU',
                'alt_name' => 'KOTA PALU',
                'latitude' => -0.86972,
                'longitude' => 119.9,
            ),
        398 =>
            array (
                'id' => '7301',
                'province_id' => '73',
                'name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'alt_name' => 'KABUPATEN KEPULAUAN SELAYAR',
                'latitude' => -6.81667,
                'longitude' => 120.8,
            ),
        399 =>
            array (
                'id' => '7302',
                'province_id' => '73',
                'name' => 'KABUPATEN BULUKUMBA',
                'alt_name' => 'KABUPATEN BULUKUMBA',
                'latitude' => -5.41667,
                'longitude' => 120.23333,
            ),
        400 =>
            array (
                'id' => '7303',
                'province_id' => '73',
                'name' => 'KABUPATEN BANTAENG',
                'alt_name' => 'KABUPATEN BANTAENG',
                'latitude' => -5.48333,
                'longitude' => 119.98333,
            ),
        401 =>
            array (
                'id' => '7304',
                'province_id' => '73',
                'name' => 'KABUPATEN JENEPONTO',
                'alt_name' => 'KABUPATEN JENEPONTO',
                'latitude' => -5.63333,
                'longitude' => 119.73333,
            ),
        402 =>
            array (
                'id' => '7305',
                'province_id' => '73',
                'name' => 'KABUPATEN TAKALAR',
                'alt_name' => 'KABUPATEN TAKALAR',
                'latitude' => -5.41667,
                'longitude' => 119.51667,
            ),
        403 =>
            array (
                'id' => '7306',
                'province_id' => '73',
                'name' => 'KABUPATEN GOWA',
                'alt_name' => 'KABUPATEN GOWA',
                'latitude' => -5.31667,
                'longitude' => 119.75,
            ),
        404 =>
            array (
                'id' => '7307',
                'province_id' => '73',
                'name' => 'KABUPATEN SINJAI',
                'alt_name' => 'KABUPATEN SINJAI',
                'latitude' => -5.21667,
                'longitude' => 120.15,
            ),
        405 =>
            array (
                'id' => '7308',
                'province_id' => '73',
                'name' => 'KABUPATEN MAROS',
                'alt_name' => 'KABUPATEN MAROS',
                'latitude' => -5.05,
                'longitude' => 119.71667,
            ),
        406 =>
            array (
                'id' => '7309',
                'province_id' => '73',
                'name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'alt_name' => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
                'latitude' => -4.7827,
                'longitude' => 119.5506,
            ),
        407 =>
            array (
                'id' => '7310',
                'province_id' => '73',
                'name' => 'KABUPATEN BARRU',
                'alt_name' => 'KABUPATEN BARRU',
                'latitude' => -4.43333,
                'longitude' => 119.68333,
            ),
        408 =>
            array (
                'id' => '7311',
                'province_id' => '73',
                'name' => 'KABUPATEN BONE',
                'alt_name' => 'KABUPATEN BONE',
                'latitude' => -4.7,
                'longitude' => 120.13333,
            ),
        409 =>
            array (
                'id' => '7312',
                'province_id' => '73',
                'name' => 'KABUPATEN SOPPENG',
                'alt_name' => 'KABUPATEN SOPPENG',
                'latitude' => -4.3842,
                'longitude' => 119.89,
            ),
        410 =>
            array (
                'id' => '7313',
                'province_id' => '73',
                'name' => 'KABUPATEN WAJO',
                'alt_name' => 'KABUPATEN WAJO',
                'latitude' => -4,
                'longitude' => 120.16667,
            ),
        411 =>
            array (
                'id' => '7314',
                'province_id' => '73',
                'name' => 'KABUPATEN SIDENRENG RAPPANG',
                'alt_name' => 'KABUPATEN SIDENRENG RAPPANG',
                'latitude' => -3.85,
                'longitude' => 119.96667,
            ),
        412 =>
            array (
                'id' => '7315',
                'province_id' => '73',
                'name' => 'KABUPATEN PINRANG',
                'alt_name' => 'KABUPATEN PINRANG',
                'latitude' => -3.61667,
                'longitude' => 119.6,
            ),
        413 =>
            array (
                'id' => '7316',
                'province_id' => '73',
                'name' => 'KABUPATEN ENREKANG',
                'alt_name' => 'KABUPATEN ENREKANG',
                'latitude' => -3.5,
                'longitude' => 119.86667,
            ),
        414 =>
            array (
                'id' => '7317',
                'province_id' => '73',
                'name' => 'KABUPATEN LUWU',
                'alt_name' => 'KABUPATEN LUWU',
                'latitude' => -2.5577,
                'longitude' => 121.3242,
            ),
        415 =>
            array (
                'id' => '7318',
                'province_id' => '73',
                'name' => 'KABUPATEN TANA TORAJA',
                'alt_name' => 'KABUPATEN TANA TORAJA',
                'latitude' => -3.0024,
                'longitude' => 119.79655,
            ),
        416 =>
            array (
                'id' => '7322',
                'province_id' => '73',
                'name' => 'KABUPATEN LUWU UTARA',
                'alt_name' => 'KABUPATEN LUWU UTARA',
                'latitude' => -2.6,
                'longitude' => 120.25,
            ),
        417 =>
            array (
                'id' => '7325',
                'province_id' => '73',
                'name' => 'KABUPATEN LUWU TIMUR',
                'alt_name' => 'KABUPATEN LUWU TIMUR',
                'latitude' => -2.50957,
                'longitude' => 120.3978,
            ),
        418 =>
            array (
                'id' => '7326',
                'province_id' => '73',
                'name' => 'KABUPATEN TORAJA UTARA',
                'alt_name' => 'KABUPATEN TORAJA UTARA',
                'latitude' => -2.92738,
                'longitude' => 119.79218,
            ),
        419 =>
            array (
                'id' => '7371',
                'province_id' => '73',
                'name' => 'KOTA MAKASSAR',
                'alt_name' => 'KOTA MAKASSAR',
                'latitude' => -5.15,
                'longitude' => 119.45,
            ),
        420 =>
            array (
                'id' => '7372',
                'province_id' => '73',
                'name' => 'KOTA PARE-PARE',
                'alt_name' => 'KOTA PARE-PARE',
                'latitude' => -4.03333,
                'longitude' => 119.65,
            ),
        421 =>
            array (
                'id' => '7373',
                'province_id' => '73',
                'name' => 'KOTA PALOPO',
                'alt_name' => 'KOTA PALOPO',
                'latitude' => -2.97841,
                'longitude' => 120.11078,
            ),
        422 =>
            array (
                'id' => '7401',
                'province_id' => '74',
                'name' => 'KABUPATEN BUTON',
                'alt_name' => 'KABUPATEN BUTON',
                'latitude' => -5.31667,
                'longitude' => 122.58333,
            ),
        423 =>
            array (
                'id' => '7402',
                'province_id' => '74',
                'name' => 'KABUPATEN MUNA',
                'alt_name' => 'KABUPATEN MUNA',
                'latitude' => -4.96667,
                'longitude' => 122.66667,
            ),
        424 =>
            array (
                'id' => '7403',
                'province_id' => '74',
                'name' => 'KABUPATEN KONAWE',
                'alt_name' => 'KABUPATEN KONAWE',
                'latitude' => -3.91717,
                'longitude' => 122.08823,
            ),
        425 =>
            array (
                'id' => '7404',
                'province_id' => '74',
                'name' => 'KABUPATEN KOLAKA',
                'alt_name' => 'KABUPATEN KOLAKA',
                'latitude' => -4.08333,
                'longitude' => 121.66667,
            ),
        426 =>
            array (
                'id' => '7405',
                'province_id' => '74',
                'name' => 'KABUPATEN KONAWE SELATAN',
                'alt_name' => 'KABUPATEN KONAWE SELATAN',
                'latitude' => -4.19191,
                'longitude' => 122.44854,
            ),
        427 =>
            array (
                'id' => '7406',
                'province_id' => '74',
                'name' => 'KABUPATEN BOMBANA',
                'alt_name' => 'KABUPATEN BOMBANA',
                'latitude' => -4.6257,
                'longitude' => 121.81641,
            ),
        428 =>
            array (
                'id' => '7407',
                'province_id' => '74',
                'name' => 'KABUPATEN WAKATOBI',
                'alt_name' => 'KABUPATEN WAKATOBI',
                'latitude' => -5.31934,
                'longitude' => 123.5948,
            ),
        429 =>
            array (
                'id' => '7408',
                'province_id' => '74',
                'name' => 'KABUPATEN KOLAKA UTARA',
                'alt_name' => 'KABUPATEN KOLAKA UTARA',
                'latitude' => -3.10452,
                'longitude' => 121.12427,
            ),
        430 =>
            array (
                'id' => '7409',
                'province_id' => '74',
                'name' => 'KABUPATEN BUTON UTARA',
                'alt_name' => 'KABUPATEN BUTON UTARA',
                'latitude' => -5.01457,
                'longitude' => 122.93015,
            ),
        431 =>
            array (
                'id' => '7410',
                'province_id' => '74',
                'name' => 'KABUPATEN KONAWE UTARA',
                'alt_name' => 'KABUPATEN KONAWE UTARA',
                'latitude' => -3.41552,
                'longitude' => 121.99081,
            ),
        432 =>
            array (
                'id' => '7411',
                'province_id' => '74',
                'name' => 'KABUPATEN KOLAKA TIMUR',
                'alt_name' => 'KABUPATEN KOLAKA TIMUR',
                'latitude' => -4.01807,
                'longitude' => 121.86172,
            ),
        433 =>
            array (
                'id' => '7412',
                'province_id' => '74',
                'name' => 'KABUPATEN KONAWE KEPULAUAN',
                'alt_name' => 'KABUPATEN KONAWE KEPULAUAN',
                'latitude' => -4.11656,
                'longitude' => 123.10181,
            ),
        434 =>
            array (
                'id' => '7413',
                'province_id' => '74',
                'name' => 'KABUPATEN MUNA BARAT',
                'alt_name' => 'KABUPATEN MUNA BARAT',
                'latitude' => -4.83333,
                'longitude' => 122.48333,
            ),
        435 =>
            array (
                'id' => '7414',
                'province_id' => '74',
                'name' => 'KABUPATEN BUTON TENGAH',
                'alt_name' => 'KABUPATEN BUTON TENGAH',
                'latitude' => -5.31667,
                'longitude' => 122.33333,
            ),
        436 =>
            array (
                'id' => '7415',
                'province_id' => '74',
                'name' => 'KABUPATEN BUTON SELATAN',
                'alt_name' => 'KABUPATEN BUTON SELATAN',
                'latitude' => -5.56667,
                'longitude' => 122.7,
            ),
        437 =>
            array (
                'id' => '7471',
                'province_id' => '74',
                'name' => 'KOTA KENDARI',
                'alt_name' => 'KOTA KENDARI',
                'latitude' => -3.98333,
                'longitude' => 122.5,
            ),
        438 =>
            array (
                'id' => '7472',
                'province_id' => '74',
                'name' => 'KOTA BAUBAU',
                'alt_name' => 'KOTA BAUBAU',
                'latitude' => -5.477,
                'longitude' => 122.6166,
            ),
        439 =>
            array (
                'id' => '7501',
                'province_id' => '75',
                'name' => 'KABUPATEN BOALEMO',
                'alt_name' => 'KABUPATEN BOALEMO',
                'latitude' => 0.62689,
                'longitude' => 122.3568,
            ),
        440 =>
            array (
                'id' => '7502',
                'province_id' => '75',
                'name' => 'KABUPATEN GORONTALO',
                'alt_name' => 'KABUPATEN GORONTALO',
                'latitude' => 0.5728,
                'longitude' => 122.2337,
            ),
        441 =>
            array (
                'id' => '7503',
                'province_id' => '75',
                'name' => 'KABUPATEN POHUWATO',
                'alt_name' => 'KABUPATEN POHUWATO',
                'latitude' => 0.7098,
                'longitude' => 121.59582,
            ),
        442 =>
            array (
                'id' => '7504',
                'province_id' => '75',
                'name' => 'KABUPATEN BONE BOLANGO',
                'alt_name' => 'KABUPATEN BONE BOLANGO',
                'latitude' => 0.50296,
                'longitude' => 123.27501,
            ),
        443 =>
            array (
                'id' => '7505',
                'province_id' => '75',
                'name' => 'KABUPATEN GORONTALO UTARA',
                'alt_name' => 'KABUPATEN GORONTALO UTARA',
                'latitude' => 0.77,
                'longitude' => 122.31667,
            ),
        444 =>
            array (
                'id' => '7571',
                'province_id' => '75',
                'name' => 'KOTA GORONTALO',
                'alt_name' => 'KOTA GORONTALO',
                'latitude' => 0.53333,
                'longitude' => 123.1,
            ),
        445 =>
            array (
                'id' => '7601',
                'province_id' => '76',
                'name' => 'KABUPATEN MAJENE',
                'alt_name' => 'KABUPATEN MAJENE',
                'latitude' => -3.15,
                'longitude' => 118.86667,
            ),
        446 =>
            array (
                'id' => '7602',
                'province_id' => '76',
                'name' => 'KABUPATEN POLEWALI MANDAR',
                'alt_name' => 'KABUPATEN POLEWALI MANDAR',
                'latitude' => -3.3,
                'longitude' => 119.16667,
            ),
        447 =>
            array (
                'id' => '7603',
                'province_id' => '76',
                'name' => 'KABUPATEN MAMASA',
                'alt_name' => 'KABUPATEN MAMASA',
                'latitude' => -2.96492,
                'longitude' => 119.30631,
            ),
        448 =>
            array (
                'id' => '7604',
                'province_id' => '76',
                'name' => 'KABUPATEN MAMUJU',
                'alt_name' => 'KABUPATEN MAMUJU',
                'latitude' => -2.5,
                'longitude' => 119.41667,
            ),
        449 =>
            array (
                'id' => '7605',
                'province_id' => '76',
                'name' => 'KABUPATEN MAMUJU UTARA',
                'alt_name' => 'KABUPATEN MAMUJU UTARA',
                'latitude' => -1.51639,
                'longitude' => 119.42139,
            ),
        450 =>
            array (
                'id' => '7606',
                'province_id' => '76',
                'name' => 'KABUPATEN MAMUJU TENGAH',
                'alt_name' => 'KABUPATEN MAMUJU TENGAH',
                'latitude' => -2.8212,
                'longitude' => 119.2662,
            ),
        451 =>
            array (
                'id' => '8101',
                'province_id' => '81',
                'name' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'alt_name' => 'KABUPATEN MALUKU TENGGARA BARAT',
                'latitude' => -7.61186,
                'longitude' => 131.38,
            ),
        452 =>
            array (
                'id' => '8102',
                'province_id' => '81',
                'name' => 'KABUPATEN MALUKU TENGGARA',
                'alt_name' => 'KABUPATEN MALUKU TENGGARA',
                'latitude' => -5.75,
                'longitude' => 132.73334,
            ),
        453 =>
            array (
                'id' => '8103',
                'province_id' => '81',
                'name' => 'KABUPATEN MALUKU TENGAH',
                'alt_name' => 'KABUPATEN MALUKU TENGAH',
                'latitude' => -3.29167,
                'longitude' => 128.9675,
            ),
        454 =>
            array (
                'id' => '8104',
                'province_id' => '81',
                'name' => 'KABUPATEN BURU',
                'alt_name' => 'KABUPATEN BURU',
                'latitude' => -3.32767,
                'longitude' => 126.68413,
            ),
        455 =>
            array (
                'id' => '8105',
                'province_id' => '81',
                'name' => 'KABUPATEN KEPULAUAN ARU',
                'alt_name' => 'KABUPATEN KEPULAUAN ARU',
                'latitude' => -6.17059,
                'longitude' => 134.46991,
            ),
        456 =>
            array (
                'id' => '8106',
                'province_id' => '81',
                'name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'alt_name' => 'KABUPATEN SERAM BAGIAN BARAT',
                'latitude' => -3.1027,
                'longitude' => 128.42996,
            ),
        457 =>
            array (
                'id' => '8107',
                'province_id' => '81',
                'name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'alt_name' => 'KABUPATEN SERAM BAGIAN TIMUR',
                'latitude' => -3.39851,
                'longitude' => 130.39166,
            ),
        458 =>
            array (
                'id' => '8108',
                'province_id' => '81',
                'name' => 'KABUPATEN MALUKU BARAT DAYA',
                'alt_name' => 'KABUPATEN MALUKU BARAT DAYA',
                'latitude' => -7.8296,
                'longitude' => 126.17386,
            ),
        459 =>
            array (
                'id' => '8109',
                'province_id' => '81',
                'name' => 'KABUPATEN BURU SELATAN',
                'alt_name' => 'KABUPATEN BURU SELATAN',
                'latitude' => -3.52187,
                'longitude' => 126.59271,
            ),
        460 =>
            array (
                'id' => '8171',
                'province_id' => '81',
                'name' => 'KOTA AMBON',
                'alt_name' => 'KOTA AMBON',
                'latitude' => -3.7,
                'longitude' => 128.18333,
            ),
        461 =>
            array (
                'id' => '8172',
                'province_id' => '81',
                'name' => 'KOTA TUAL',
                'alt_name' => 'KOTA TUAL',
                'latitude' => -5.64301,
                'longitude' => 132.74934,
            ),
        462 =>
            array (
                'id' => '8201',
                'province_id' => '82',
                'name' => 'KABUPATEN HALMAHERA BARAT',
                'alt_name' => 'KABUPATEN HALMAHERA BARAT',
                'latitude' => 1.41709,
                'longitude' => 127.55264,
            ),
        463 =>
            array (
                'id' => '8202',
                'province_id' => '82',
                'name' => 'KABUPATEN HALMAHERA TENGAH',
                'alt_name' => 'KABUPATEN HALMAHERA TENGAH',
                'latitude' => 0.48056,
                'longitude' => 128.25,
            ),
        464 =>
            array (
                'id' => '8203',
                'province_id' => '82',
                'name' => 'KABUPATEN KEPULAUAN SULA',
                'alt_name' => 'KABUPATEN KEPULAUAN SULA',
                'latitude' => -1.8646,
                'longitude' => 125.69046,
            ),
        465 =>
            array (
                'id' => '8204',
                'province_id' => '82',
                'name' => 'KABUPATEN HALMAHERA SELATAN',
                'alt_name' => 'KABUPATEN HALMAHERA SELATAN',
                'latitude' => -0.3955,
                'longitude' => 127.90833,
            ),
        466 =>
            array (
                'id' => '8205',
                'province_id' => '82',
                'name' => 'KABUPATEN HALMAHERA UTARA',
                'alt_name' => 'KABUPATEN HALMAHERA UTARA',
                'latitude' => 1.73194,
                'longitude' => 128.00778,
            ),
        467 =>
            array (
                'id' => '8206',
                'province_id' => '82',
                'name' => 'KABUPATEN HALMAHERA TIMUR',
                'alt_name' => 'KABUPATEN HALMAHERA TIMUR',
                'latitude' => 1.33517,
                'longitude' => 128.48627,
            ),
        468 =>
            array (
                'id' => '8207',
                'province_id' => '82',
                'name' => 'KABUPATEN PULAU MOROTAI',
                'alt_name' => 'KABUPATEN PULAU MOROTAI',
                'latitude' => 2.19924,
                'longitude' => 128.40546,
            ),
        469 =>
            array (
                'id' => '8208',
                'province_id' => '82',
                'name' => 'KABUPATEN PULAU TALIABU',
                'alt_name' => 'KABUPATEN PULAU TALIABU',
                'latitude' => -1.84578,
                'longitude' => 124.78992,
            ),
        470 =>
            array (
                'id' => '8271',
                'province_id' => '82',
                'name' => 'KOTA TERNATE',
                'alt_name' => 'KOTA TERNATE',
                'latitude' => 0.89618,
                'longitude' => 127.31016,
            ),
        471 =>
            array (
                'id' => '8272',
                'province_id' => '82',
                'name' => 'KOTA TIDORE KEPULAUAN',
                'alt_name' => 'KOTA TIDORE KEPULAUAN',
                'latitude' => 0.60962,
                'longitude' => 127.56981,
            ),
        472 =>
            array (
                'id' => '9101',
                'province_id' => '91',
                'name' => 'KABUPATEN FAK-FAK',
                'alt_name' => 'KABUPATEN FAK-FAK',
                'latitude' => -2.92641,
                'longitude' => 132.29608,
            ),
        473 =>
            array (
                'id' => '9102',
                'province_id' => '91',
                'name' => 'KABUPATEN KAIMANA',
                'alt_name' => 'KABUPATEN KAIMANA',
                'latitude' => -3.66093,
                'longitude' => 133.77451,
            ),
        474 =>
            array (
                'id' => '9103',
                'province_id' => '91',
                'name' => 'KABUPATEN TELUK WONDAMA',
                'alt_name' => 'KABUPATEN TELUK WONDAMA',
                'latitude' => -2.7,
                'longitude' => 134.5,
            ),
        475 =>
            array (
                'id' => '9104',
                'province_id' => '91',
                'name' => 'KABUPATEN TELUK BINTUNI',
                'alt_name' => 'KABUPATEN TELUK BINTUNI',
                'latitude' => -1.88037,
                'longitude' => 133.33105,
            ),
        476 =>
            array (
                'id' => '9105',
                'province_id' => '91',
                'name' => 'KABUPATEN MANOKWARI',
                'alt_name' => 'KABUPATEN MANOKWARI',
                'latitude' => -0.9,
                'longitude' => 133.75,
            ),
        477 =>
            array (
                'id' => '9106',
                'province_id' => '91',
                'name' => 'KABUPATEN SORONG SELATAN',
                'alt_name' => 'KABUPATEN SORONG SELATAN',
                'latitude' => -1.50495,
                'longitude' => 132.28638,
            ),
        478 =>
            array (
                'id' => '9107',
                'province_id' => '91',
                'name' => 'KABUPATEN SORONG',
                'alt_name' => 'KABUPATEN SORONG',
                'latitude' => -1.16667,
                'longitude' => 131.5,
            ),
        479 =>
            array (
                'id' => '9108',
                'province_id' => '91',
                'name' => 'KABUPATEN RAJA AMPAT',
                'alt_name' => 'KABUPATEN RAJA AMPAT',
                'latitude' => -0.5,
                'longitude' => 130,
            ),
        480 =>
            array (
                'id' => '9109',
                'province_id' => '91',
                'name' => 'KABUPATEN TAMBRAUW',
                'alt_name' => 'KABUPATEN TAMBRAUW',
                'latitude' => -0.60515,
                'longitude' => 132.48962,
            ),
        481 =>
            array (
                'id' => '9110',
                'province_id' => '91',
                'name' => 'KABUPATEN MAYBRAT',
                'alt_name' => 'KABUPATEN MAYBRAT',
                'latitude' => -1.2155,
                'longitude' => 132.35092,
            ),
        482 =>
            array (
                'id' => '9111',
                'province_id' => '91',
                'name' => 'KABUPATEN MANOKWARI SELATAN',
                'alt_name' => 'KABUPATEN MANOKWARI SELATAN',
                'latitude' => -1.0798,
                'longitude' => 133.96729,
            ),
        483 =>
            array (
                'id' => '9112',
                'province_id' => '91',
                'name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'alt_name' => 'KABUPATEN PEGUNUNGAN ARFAK',
                'latitude' => -0.93523,
                'longitude' => 133.89587,
            ),
        484 =>
            array (
                'id' => '9171',
                'province_id' => '91',
                'name' => 'KOTA SORONG',
                'alt_name' => 'KOTA SORONG',
                'latitude' => -0.86507,
                'longitude' => 131.25153,
            ),
        485 =>
            array (
                'id' => '9401',
                'province_id' => '94',
                'name' => 'KABUPATEN MERAUKE',
                'alt_name' => 'KABUPATEN MERAUKE',
                'latitude' => -7.66667,
                'longitude' => 139.66667,
            ),
        486 =>
            array (
                'id' => '9402',
                'province_id' => '94',
                'name' => 'KABUPATEN JAYAWIJAYA',
                'alt_name' => 'KABUPATEN JAYAWIJAYA',
                'latitude' => -4.08333,
                'longitude' => 139.08333,
            ),
        487 =>
            array (
                'id' => '9403',
                'province_id' => '94',
                'name' => 'KABUPATEN JAYAPURA',
                'alt_name' => 'KABUPATEN JAYAPURA',
                'latitude' => -3,
                'longitude' => 139.95,
            ),
        488 =>
            array (
                'id' => '9404',
                'province_id' => '94',
                'name' => 'KABUPATEN NABIRE',
                'alt_name' => 'KABUPATEN NABIRE',
                'latitude' => -3.54016,
                'longitude' => 135.55511,
            ),
        489 =>
            array (
                'id' => '9408',
                'province_id' => '94',
                'name' => 'KABUPATEN KEPULAUAN YAPEN',
                'alt_name' => 'KABUPATEN KEPULAUAN YAPEN',
                'latitude' => -1.78773,
                'longitude' => 136.27716,
            ),
        490 =>
            array (
                'id' => '9409',
                'province_id' => '94',
                'name' => 'KABUPATEN BIAK NUMFOR',
                'alt_name' => 'KABUPATEN BIAK NUMFOR',
                'latitude' => -1.03333,
                'longitude' => 136,
            ),
        491 =>
            array (
                'id' => '9410',
                'province_id' => '94',
                'name' => 'KABUPATEN PANIAI',
                'alt_name' => 'KABUPATEN PANIAI',
                'latitude' => -3.9,
                'longitude' => 136.60001,
            ),
        492 =>
            array (
                'id' => '9411',
                'province_id' => '94',
                'name' => 'KABUPATEN PUNCAK JAYA',
                'alt_name' => 'KABUPATEN PUNCAK JAYA',
                'latitude' => -3.67241,
                'longitude' => 137.43896,
            ),
        493 =>
            array (
                'id' => '9412',
                'province_id' => '94',
                'name' => 'KABUPATEN MIMIKA',
                'alt_name' => 'KABUPATEN MIMIKA',
                'latitude' => -4.54357,
                'longitude' => 136.56555,
            ),
        494 =>
            array (
                'id' => '9413',
                'province_id' => '94',
                'name' => 'KABUPATEN BOVEN DIGOEL',
                'alt_name' => 'KABUPATEN BOVEN DIGOEL',
                'latitude' => -5.70519,
                'longitude' => 140.36349,
            ),
        495 =>
            array (
                'id' => '9414',
                'province_id' => '94',
                'name' => 'KABUPATEN MAPPI',
                'alt_name' => 'KABUPATEN MAPPI',
                'latitude' => -6.49971,
                'longitude' => 139.34441,
            ),
        496 =>
            array (
                'id' => '9415',
                'province_id' => '94',
                'name' => 'KABUPATEN ASMAT',
                'alt_name' => 'KABUPATEN ASMAT',
                'latitude' => -5.3795,
                'longitude' => 138.46344,
            ),
        497 =>
            array (
                'id' => '9416',
                'province_id' => '94',
                'name' => 'KABUPATEN YAHUKIMO',
                'alt_name' => 'KABUPATEN YAHUKIMO',
                'latitude' => -4.60403,
                'longitude' => 139.58405,
            ),
        498 =>
            array (
                'id' => '9417',
                'province_id' => '94',
                'name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'alt_name' => 'KABUPATEN PEGUNUNGAN BINTANG',
                'latitude' => -4.52167,
                'longitude' => 140.29541,
            ),
        499 =>
            array (
                'id' => '9418',
                'province_id' => '94',
                'name' => 'KABUPATEN TOLIKARA',
                'alt_name' => 'KABUPATEN TOLIKARA',
                'latitude' => -3.42661,
                'longitude' => 137.41699,
            ),
        500 =>
            array (
                'id' => '9419',
                'province_id' => '94',
                'name' => 'KABUPATEN SARMI',
                'alt_name' => 'KABUPATEN SARMI',
                'latitude' => -2.41667,
                'longitude' => 139.08333,
            ),
        501 =>
            array (
                'id' => '9420',
                'province_id' => '94',
                'name' => 'KABUPATEN KEEROM',
                'alt_name' => 'KABUPATEN KEEROM',
                'latitude' => -3.3,
                'longitude' => 140.61667,
            ),
        502 =>
            array (
                'id' => '9426',
                'province_id' => '94',
                'name' => 'KABUPATEN WAROPEN',
                'alt_name' => 'KABUPATEN WAROPEN',
                'latitude' => -2.286,
                'longitude' => 137.01837,
            ),
        503 =>
            array (
                'id' => '9427',
                'province_id' => '94',
                'name' => 'KABUPATEN SUPIORI',
                'alt_name' => 'KABUPATEN SUPIORI',
                'latitude' => -0.73881,
                'longitude' => 135.61111,
            ),
        504 =>
            array (
                'id' => '9428',
                'province_id' => '94',
                'name' => 'KABUPATEN MAMBERAMO RAYA',
                'alt_name' => 'KABUPATEN MAMBERAMO RAYA',
                'latitude' => -2.23561,
                'longitude' => 137.78229,
            ),
        505 =>
            array (
                'id' => '9429',
                'province_id' => '94',
                'name' => 'KABUPATEN NDUGA',
                'alt_name' => 'KABUPATEN NDUGA',
                'latitude' => -4.45093,
                'longitude' => 138.10089,
            ),
        506 =>
            array (
                'id' => '9430',
                'province_id' => '94',
                'name' => 'KABUPATEN LANNY JAYA',
                'alt_name' => 'KABUPATEN LANNY JAYA',
                'latitude' => -3.91244,
                'longitude' => 138.28766,
            ),
        507 =>
            array (
                'id' => '9431',
                'province_id' => '94',
                'name' => 'KABUPATEN MAMBERAMO TENGAH',
                'alt_name' => 'KABUPATEN MAMBERAMO TENGAH',
                'latitude' => -2.46064,
                'longitude' => 138.45245,
            ),
        508 =>
            array (
                'id' => '9432',
                'province_id' => '94',
                'name' => 'KABUPATEN YALIMO',
                'alt_name' => 'KABUPATEN YALIMO',
                'latitude' => -3.86037,
                'longitude' => 138.47305,
            ),
        509 =>
            array (
                'id' => '9433',
                'province_id' => '94',
                'name' => 'KABUPATEN PUNCAK',
                'alt_name' => 'KABUPATEN PUNCAK',
                'latitude' => -4.14204,
                'longitude' => 137.09702,
            ),
        510 =>
            array (
                'id' => '9434',
                'province_id' => '94',
                'name' => 'KABUPATEN DOGIYAI',
                'alt_name' => 'KABUPATEN DOGIYAI',
                'latitude' => -4.03186,
                'longitude' => 135.43945,
            ),
        511 =>
            array (
                'id' => '9435',
                'province_id' => '94',
                'name' => 'KABUPATEN INTAN JAYA',
                'alt_name' => 'KABUPATEN INTAN JAYA',
                'latitude' => -3.41016,
                'longitude' => 136.70837,
            ),
        512 =>
            array (
                'id' => '9436',
                'province_id' => '94',
                'name' => 'KABUPATEN DEIYAI',
                'alt_name' => 'KABUPATEN DEIYAI',
                'latitude' => -3.94737,
                'longitude' => 135.95032,
            ),
        513 =>
            array (
                'id' => '9471',
                'province_id' => '94',
                'name' => 'KOTA JAYAPURA',
                'alt_name' => 'KOTA JAYAPURA',
                'latitude' => -2.64647,
                'longitude' => 140.77779,
            ),
    );
}