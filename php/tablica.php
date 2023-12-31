<?php

// Deklaracja tablicy zamówień
$zamowienia = [
    [
        'numer_zamowienia' => 12345,
        'data_zamowienia' => '2023-11-10',
        'produkty' => [
            [
                'nazwa' => 'Laptop',
                'cena' => 1999.99,
                'ilosc' => 2
            ],
            [
                'nazwa' => 'Mysz',
                'cena' => 29.99,
                'ilosc' => 1
            ]
        ],
        'klient' => [
            'imie' => 'Anna',
            'nazwisko' => 'Nowak',
            'adres' => 'ul. Leśna 5, 30-001 Kraków'
        ],
        'suma' => 4029.97
    ],
    [
        'numer_zamowienia' => 67890,
        'data_zamowienia' => '2023-11-12',
        'produkty' => [
            [
                'nazwa' => 'Smartfon',
                'cena' => 799.99,
                'ilosc' => 1
            ],
            [
                'nazwa' => 'Słuchawki',
                'cena' => 129.99,
                'ilosc' => 2
            ]
        ],
        'klient' => [
            'imie' => 'Tomasz',
            'nazwisko' => 'Kowalczyk',
            'adres' => 'ul. Kwiatowa 15, 05-001 Warszawa'
        ],
        'suma' => 1059.97
    ],
    [
        'numer_zamowienia' => 13579,
        'data_zamowienia' => '2023-11-15',
        'produkty' => [
            [
                'nazwa' => 'Konsola',
                'cena' => 1499.99,
                'ilosc' => 1
            ],
            [
                'nazwa' => 'Gra',
                'cena' => 59.99,
                'ilosc' => 3
            ]
        ],
        'klient' => [
            'imie' => 'Marcin',
            'nazwisko' => 'Wiśniewski',
            'adres' => 'ul. Polna 8, 50-002 Wrocław'
        ],
        'suma' => 1679.96
    ],
    [
        'numer_zamowienia' => 32543,
        'data_zamowienia' => '2022-10-10',
        'produkty' => [
            [
                'nazwa' => 'Samochód',
                'cena' => 20000,
                'ilosc' => 1
            ],
            [
                'nazwa' => 'Dom',
                'cena' => 10000000,
                'ilosc' => 1
            ]
        ],
        'klient' => [
            'imie' => 'Dawid',
            'nazwisko' => 'Podsiadło',
            'adres' => 'ul. Dolna 14, 64-360 Zbąszyń'
        ],
        'suma' => 10020000
    ]
];
$max=null;
// Przykład użycia danych z tablicy zamówień
foreach ($zamowienia as $zamowienie) {
    echo "Numer zamówienia: " . $zamowienie['numer_zamowienia'] . "<br>";
    echo "Data zamówienia: " . $zamowienie['data_zamowienia'] . "<br>";

    echo "<br>Produkty:<br>";
    foreach ($zamowienie['produkty'] as $produkt) {
        echo "Nazwa: " . $produkt['nazwa'] . ", Cena: " . $produkt['cena'] . ", Ilość: " . $produkt['ilosc'] . "<br>";
    }

    echo "<br>Dane klienta:<br>";
    echo "Imię: " . $zamowienie['klient']['imie'] . "<br>";
    echo "Nazwisko: " . $zamowienie['klient']['nazwisko'] . "<br>";
    echo "Adres: " . $zamowienie['klient']['adres'] . "<br>";

    echo "<br>Suma zamówienia: " . $zamowienie['suma'] . " PLN<br><br>";
    $suma=$suma+$zamowienie['suma'];
    echo "Suma zamówień: " . $suma;
}


?> 