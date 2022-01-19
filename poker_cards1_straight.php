<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下はポーカーの役を判定するプログラムです。
// cards配列に格納したカードの役を判定し、結果表示してください。
// cards配列には計5枚、それぞれ絵柄(suit)、数字(numeber)を格納する
// 絵柄はheart, spade, diamond, clubのみ
// 数字は1-13のみ

// 上記以外の絵柄や数字が存在した場合、または同一の絵柄、数字がcards配列に存在した場合、
// 役の判定前に「手札が不正です」と表示してください。
// 役判定は関数に記述し、関数を呼び出して結果表示すること
// プログラムが完成したらcards配列を差し替えてすべての役で検証を行い、提出時にテストケースを示すこと

// <役>
// ワンペア・・・同じ数字２枚（ペア）が１組
// ツーペア・・・同じ数字２枚（ペア）が２組
// スリーカード・・・同じ数字３枚
// ストレート・・・数字の連番５枚（13と1は繋がらない）
// フラッシュ・・・同じマークが５枚
// フルハウス・・・同じ数字３枚が１組＋同じ数字２枚（ペア）が１組
// フォーカード・・・同じ数字４枚
// ストレートフラッシュ・・・数字の連番５枚＋同じマークが５枚
// ロイヤルストレートフラッシュ・・・1, 10, 11, 12, 13で同じマーク
// ※下の方が強い


// 表示例1）
// 手札は 
// heart2 heart5 heart3 heart4 culb1
// 役はストレートです
$cards = [
    ['suit'=>'heart', 'number'=>2],
    ['suit'=>'heart', 'number'=>5],
    ['suit'=>'heart', 'number'=>3],
    ['suit'=>'heart', 'number'=>4],
    ['suit'=>'culb',  'number'=>1]
        ];
        
function judge($cards) {
    // この関数内に処理を記述
        if($cards) {
            echo "ストレート";
        }
}     


// 表示例2）
// 手札は 
// heart1 spade2 diamond11 club13 heart9
// 役はなしです
// $cards2 = [
//     ['suit'=>'heart',   'number'=> 1],
//     ['suit'=>'spade',   'number'=> 2],
//     ['suit'=>'diamond', 'number'=>11],
//     ['suit'=>'club',    'number'=>13],
//     ['suit'=>'heart',   'number'=> 9]
//          ];
         
// function judge2($cards2){
//         if($cards2){
//             echo "なし";
//         }
// }            
         

// 表示例3）
// 手札は 
// heart1 heart1 heart3 heart4 heart5
// 手札は不正です
// $cards3 = [
//     ['suit'=>'heart', 'number'=>1],
//     ['suit'=>'heart', 'number'=>1],
//     ['suit'=>'heart', 'number'=>3],
//     ['suit'=>'heart', 'number'=>4],
//     ['suit'=>'heart', 'number'=>5]
//          ];
// function judge3($cards3){
//         if($cards3){
//             echo "なし";
//         }
// }                     

    // カードの不正チェック

    // カードの並び替え

    // 役判定

    // 結果を返す
    

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ポーカー役判定</title>
</head>
<body>
    <section>
        <p>手札は</p>
        <p><?php foreach($cards as $card): ?><?=$card['suit'].$card['number'] ?><?php endforeach; ?></p>
        <p>役は<?php judge($cards) ?>です。</p>
      
        <!--<p>手札は</p>-->
        <!--<p><?php //foreach($cards2 as $card2): ?>-->
        <?//$card2['suit'].$card2['number'] ?>
        <!--<?php //endforeach; ?></p>-->
        <!--<p>役は<?php //judge2($cards2) ?>です。</p>-->
       
        
        <!--<p>手札は</p>-->
        <!--<p><?php //foreach($cards3 as $card3): ?>
        <?//=$card3['suit'].$card3['number'] ?>
        <?php //endforeach; ?></p>-->
        <!--<p>役は<?php //judge3($cards3) ?>です。</p>-->
        
    </section>
</body>
</html>