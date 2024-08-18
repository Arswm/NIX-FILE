<?php

namespace Database\Seeders;

use App\Models\Sentence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SentenceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $s = new Sentence();
    $s->text = 'وقتی پدر یا مادر، همسر، رییس یا معلم به ما می‌گویند باید چگونه باشیم، در واقع نسخه خودشان را از خود ایده‌آل‌مان، به ما می دهند، تصویری از خود بایدی ما، فردی که فکر می‌کنیم باید به آن تبدیل شویم. وقتی که ما این خود بایدی را قبول می‌کنیم، این خود، تبدیل به صندوقی می‌شود که ما در آن به دام می‌افتیم؛ آنچه ماکس وبر جامعه شناس، آن را «قفس آهنی» ما نامید و ما در آن مانند یک دلقک، به این سو و آن و سو می‌دویم و خود را به دیوارهای نامرئی می‌زنیم.
';
    $s->save();

    $s = new Sentence();
    $s->text = 'آن‌که انتظار دارد هر چهارفصل سال بهار باشد، نه خود را می‌شناسد، نه طبیعت را و نه زندگی را.
';
    $s->save();

    $s = new Sentence();
    $s->text = 'یک احمق خود را خردمند می پندارد و خردمند می داند که احمقی بیش نیست.';
    $s->save();
  }
}
