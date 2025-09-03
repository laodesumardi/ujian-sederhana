<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat admin default
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@ujian.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Buat siswa default
        User::create([
            'name' => 'Siswa Satu',
            'email' => 'siswa1@ujian.com',
            'password' => Hash::make('siswa123'),
            'role' => 'siswa',
            'email_verified_at' => now(),
        ]);

        // Buat 60 soal HTML dan CSS dasar untuk ujian
        $questions = [
            [
                'question_text' => 'Apa kepanjangan dari HTML?',
                'option_a' => 'Hyper Text Markup Language',
                'option_b' => 'High Tech Modern Language',
                'option_c' => 'Home Tool Markup Language',
                'option_d' => 'Hyperlink and Text Markup Language',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat judul terbesar?',
                'option_a' => '<h6>',
                'option_b' => '<h1>',
                'option_c' => '<title>',
                'option_d' => '<header>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Apa kepanjangan dari CSS?',
                'option_a' => 'Cascading Style Sheets',
                'option_b' => 'Computer Style Sheets',
                'option_c' => 'Creative Style Sheets',
                'option_d' => 'Colorful Style Sheets',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat paragraf?',
                'option_a' => '<paragraph>',
                'option_b' => '<p>',
                'option_c' => '<para>',
                'option_d' => '<text>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Atribut HTML mana yang digunakan untuk menentukan warna teks dengan CSS?',
                'option_a' => 'bgcolor',
                'option_b' => 'color',
                'option_c' => 'text-color',
                'option_d' => 'font-color',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat link?',
                'option_a' => '<link>',
                'option_b' => '<a>',
                'option_c' => '<href>',
                'option_d' => '<url>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengubah warna background?',
                'option_a' => 'color',
                'option_b' => 'bg-color',
                'option_c' => 'background-color',
                'option_d' => 'bgcolor',
                'correct_answer' => 'c'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk menampilkan gambar?',
                'option_a' => '<image>',
                'option_b' => '<img>',
                'option_c' => '<picture>',
                'option_d' => '<photo>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Atribut mana yang wajib ada pada tag <img>?',
                'option_a' => 'src',
                'option_b' => 'alt',
                'option_c' => 'width',
                'option_d' => 'height',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat list berurutan?',
                'option_a' => '<ul>',
                'option_b' => '<ol>',
                'option_c' => '<li>',
                'option_d' => '<list>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur ukuran font?',
                'option_a' => 'font-size',
                'option_b' => 'text-size',
                'option_c' => 'font-weight',
                'option_d' => 'size',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat tabel?',
                'option_a' => '<table>',
                'option_b' => '<tab>',
                'option_c' => '<tr>',
                'option_d' => '<td>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk membuat teks tebal?',
                'option_a' => 'font-style',
                'option_b' => 'font-weight',
                'option_c' => 'text-decoration',
                'option_d' => 'font-variant',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat form?',
                'option_a' => '<form>',
                'option_b' => '<input>',
                'option_c' => '<field>',
                'option_d' => '<submit>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Atribut mana yang digunakan untuk menentukan jenis input dalam form?',
                'option_a' => 'name',
                'option_b' => 'type',
                'option_c' => 'value',
                'option_d' => 'id',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur jarak antar huruf?',
                'option_a' => 'letter-spacing',
                'option_b' => 'word-spacing',
                'option_c' => 'line-height',
                'option_d' => 'text-indent',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat div?',
                'option_a' => '<division>',
                'option_b' => '<div>',
                'option_c' => '<section>',
                'option_d' => '<container>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur margin?',
                'option_a' => 'padding',
                'option_b' => 'margin',
                'option_c' => 'border',
                'option_d' => 'spacing',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat span?',
                'option_a' => '<span>',
                'option_b' => '<inline>',
                'option_c' => '<text>',
                'option_d' => '<small>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur padding?',
                'option_a' => 'margin',
                'option_b' => 'padding',
                'option_c' => 'border',
                'option_d' => 'spacing',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat button?',
                'option_a' => '<button>',
                'option_b' => '<btn>',
                'option_c' => '<click>',
                'option_d' => '<submit>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur border?',
                'option_a' => 'outline',
                'option_b' => 'border',
                'option_c' => 'frame',
                'option_d' => 'edge',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat header?',
                'option_a' => '<head>',
                'option_b' => '<header>',
                'option_c' => '<top>',
                'option_d' => '<title>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur tinggi elemen?',
                'option_a' => 'height',
                'option_b' => 'width',
                'option_c' => 'size',
                'option_d' => 'length',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat footer?',
                'option_a' => '<bottom>',
                'option_b' => '<footer>',
                'option_c' => '<end>',
                'option_d' => '<foot>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur lebar elemen?',
                'option_a' => 'height',
                'option_b' => 'width',
                'option_c' => 'size',
                'option_d' => 'length',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat navigation?',
                'option_a' => '<nav>',
                'option_b' => '<navigation>',
                'option_c' => '<menu>',
                'option_d' => '<navbar>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur posisi elemen?',
                'option_a' => 'position',
                'option_b' => 'location',
                'option_c' => 'place',
                'option_d' => 'align',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat section?',
                'option_a' => '<section>',
                'option_b' => '<part>',
                'option_c' => '<area>',
                'option_d' => '<zone>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur display elemen?',
                'option_a' => 'show',
                'option_b' => 'display',
                'option_c' => 'visible',
                'option_d' => 'view',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat article?',
                'option_a' => '<article>',
                'option_b' => '<content>',
                'option_c' => '<post>',
                'option_d' => '<story>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur float elemen?',
                'option_a' => 'float',
                'option_b' => 'align',
                'option_c' => 'position',
                'option_d' => 'flow',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat aside?',
                'option_a' => '<side>',
                'option_b' => '<aside>',
                'option_c' => '<sidebar>',
                'option_d' => '<extra>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur clear?',
                'option_a' => 'clear',
                'option_b' => 'reset',
                'option_c' => 'clean',
                'option_d' => 'remove',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat main?',
                'option_a' => '<main>',
                'option_b' => '<primary>',
                'option_c' => '<central>',
                'option_d' => '<core>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur overflow?',
                'option_a' => 'overflow',
                'option_b' => 'scroll',
                'option_c' => 'flow',
                'option_d' => 'excess',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat strong?',
                'option_a' => '<bold>',
                'option_b' => '<strong>',
                'option_c' => '<b>',
                'option_d' => '<heavy>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur z-index?',
                'option_a' => 'z-index',
                'option_b' => 'layer',
                'option_c' => 'depth',
                'option_d' => 'stack',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat emphasis?',
                'option_a' => '<em>',
                'option_b' => '<emphasis>',
                'option_c' => '<i>',
                'option_d' => '<italic>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur opacity?',
                'option_a' => 'transparency',
                'option_b' => 'opacity',
                'option_c' => 'alpha',
                'option_d' => 'visible',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat small text?',
                'option_a' => '<small>',
                'option_b' => '<tiny>',
                'option_c' => '<mini>',
                'option_d' => '<little>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur cursor?',
                'option_a' => 'cursor',
                'option_b' => 'pointer',
                'option_c' => 'mouse',
                'option_d' => 'click',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat mark?',
                'option_a' => '<highlight>',
                'option_b' => '<mark>',
                'option_c' => '<yellow>',
                'option_d' => '<marker>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur text-align?',
                'option_a' => 'align',
                'option_b' => 'text-align',
                'option_c' => 'alignment',
                'option_d' => 'text-position',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat del?',
                'option_a' => '<delete>',
                'option_b' => '<del>',
                'option_c' => '<remove>',
                'option_d' => '<strike>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur text-decoration?',
                'option_a' => 'decoration',
                'option_b' => 'text-decoration',
                'option_c' => 'text-style',
                'option_d' => 'font-decoration',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat ins?',
                'option_a' => '<insert>',
                'option_b' => '<ins>',
                'option_c' => '<add>',
                'option_d' => '<new>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur line-height?',
                'option_a' => 'line-height',
                'option_b' => 'height',
                'option_c' => 'spacing',
                'option_d' => 'line-spacing',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat sub?',
                'option_a' => '<subscript>',
                'option_b' => '<sub>',
                'option_c' => '<lower>',
                'option_d' => '<down>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur word-spacing?',
                'option_a' => 'word-spacing',
                'option_b' => 'letter-spacing',
                'option_c' => 'spacing',
                'option_d' => 'text-spacing',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat sup?',
                'option_a' => '<superscript>',
                'option_b' => '<sup>',
                'option_c' => '<upper>',
                'option_d' => '<up>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur text-indent?',
                'option_a' => 'indent',
                'option_b' => 'text-indent',
                'option_c' => 'margin-left',
                'option_d' => 'padding-left',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat code?',
                'option_a' => '<code>',
                'option_b' => '<program>',
                'option_c' => '<script>',
                'option_d' => '<coding>',
                'correct_answer' => 'a'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur text-transform?',
                'option_a' => 'transform',
                'option_b' => 'text-transform',
                'option_c' => 'case',
                'option_d' => 'text-case',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat pre?',
                'option_a' => '<preformatted>',
                'option_b' => '<pre>',
                'option_c' => '<format>',
                'option_d' => '<preserve>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur white-space?',
                'option_a' => 'space',
                'option_b' => 'white-space',
                'option_c' => 'whitespace',
                'option_d' => 'spacing',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat kbd?',
                'option_a' => '<keyboard>',
                'option_b' => '<kbd>',
                'option_c' => '<key>',
                'option_d' => '<input>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur font-family?',
                'option_a' => 'font',
                'option_b' => 'font-family',
                'option_c' => 'family',
                'option_d' => 'typeface',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat samp?',
                'option_a' => '<sample>',
                'option_b' => '<samp>',
                'option_c' => '<output>',
                'option_d' => '<result>',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Properti CSS mana yang digunakan untuk mengatur font-style?',
                'option_a' => 'style',
                'option_b' => 'font-style',
                'option_c' => 'text-style',
                'option_d' => 'font-variant',
                'correct_answer' => 'b'
            ],
            [
                'question_text' => 'Tag HTML mana yang digunakan untuk membuat var?',
                'option_a' => '<variable>',
                'option_b' => '<var>',
                'option_c' => '<value>',
                'option_d' => '<param>',
                'correct_answer' => 'b'
            ]
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
