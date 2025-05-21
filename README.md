# Janji
_Saya Datuk Daneswara Raditya Samsura dengan NIM 2308224 mengerjakan Tugas Praktikum 10 pada Mata Kuliah Desain dan Pemrograman Berorientasi Objek (DPBO) untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin_

# Deskripsi & Desain Program

Program mengimplementasi desain arsitektur Model-View-ViewModel (MVVM) dengan 3 tabel dan 3 model, yaitu `Candidates`, `Interviewers`, dan `Interviews`. Pada model juga dapat diimplementasi Create-Read-Update-Delete (CRUD) sebagai metode pengelolaan data.

```plaintext
model/
├── Candidates.php
│   ├── getAll  ()
│   ├── GetById ([ID])
│   ├── create  ([NAME], [EMAIL])
│   ├── update  ([ID], [NAME], [EMAIL])
│   └── delete  ([ID])
├── Interviewers.php
│   ├── getAll  ()
│   ├── GetById ([ID])
│   ├── create  ([NAME], [DEPARTMENT])
│   ├── update  ([ID], [NAME], [DEPARTMENT])
│   └── delete  ([ID])
└── Interviews.php
│   ├── getAll  ()
│   ├── GetById ([ID])
│   ├── create  ([CANDIDATE_ID], [INTERVIEWER_ID], [SCHEDULE], [LOCATION])
│   ├── update  ([ID], [CANDIDATE_ID], [INTERVIEWER_ID], [SCHEDULE], [LOCATION])
│   └── delete  ([ID])
```

- Template terdapat pada folder view, yang berisi `header.php` untuk menampilkan title dan navbar pada laman web, dan `footer.php` yang menampilkan akhir dari laman web. keduanya ditampilkan pada setiap page web melalui `index.php`.

# Dokumentasi

