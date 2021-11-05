<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@500&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Mitr', sans-serif;
      }
    </style>
    <title>รางวัลล็อตเตอรี่ - Diversition</title>
</head>
<body class="bg-light">
    <?php
     require('lottery.php');    
    ?>
    <h1 class="navbar justify-content-center bg-dark text-info py-4 display-4 border border-dark border-4 rounded-bottom">รางวัลล็อตเตอรี่ Diversition</h1>
    <h1 class="mt-3 py-5 ms-5 display-5">ผลการออกรางวัลล็อตเตอรี่ Diversition</h1>
    <form name="shuffle_form" method="post" action="shuffle.php">
    <div class="position-absolute top-50 end-0 translate-middle-y me-5 "><input class="btn btn-light btn-lg border border-secondary border-5 rounded-pill py-3 mb-3 me-5 "  type='submit' name='shuffle' value='ดำเนินการสุ่มรางวัล' style=" font-size: 30px;"></div>
    </form>
    
    <table class="table table-bordered table-hover rounded-3 text-center ms-5 " style="width:1050px">
        <colgroup>
        <col style="width: 155px">
        <col style="width: 155px">
        <col style="width: 155px">
        <col style="width: 155px">
        <col style="width: 155px">
        <col style="width: 155px">
        <col style="width: 155px">
        <col style="width: 155px">
        </colgroup>
          <tr class="border-dark display-5">
            <th class="table-dark border-bottom border-light py-4" scope="col" colspan="4">รางวัลที่ 1</th>
            <td class="border-dark pt-4" colspan="4"><?php echo $num; ?></td>
          </tr>
          <tr class="border-dark">
            <th class="table-dark border-bottom border-light display-6 py-4" scope="col" colspan="4">รางวัลเลขข้างเคียงรางวัลที่ 1</th>
            <td class="border-dark display-5 pt-3" colspan="2"><?php echo $num2; ?></td>
            <td class="border-dark display-5 pt-3" colspan="2"><?php echo $num1; ?></td>
          </tr>
          <tr class="border-dark display-5">
            <th class="table-dark border-bottom border-light py-4" scope="col" colspan="2">รางวัลที่ 2</th>
            <td class="border-dark pt-4" colspan="2"><?php echo $second_1; ?></td>
            <td class="border-dark pt-4" colspan="2"><?php echo $second_2; ?></td>
            <td class="border-dark pt-4" colspan="2"><?php echo $second_3; ?></td>
          </tr>
          <tr class="border-dark display-5">
            <th class="table-dark border-bottom-0 border-light py-4" scope="col" colspan="4">รางวัลเลขท้าย 2 ตัว</th>
            <td class="border-dark pt-4" colspan="4"><?php echo $twonum; ?></td>
          </tr>
        </table>

        <?php require('check_lotto.php')?>

        <div class="border border-dark border-3 rounded-3 mx-5 my-3" >
        <h1 class="py-5 px-5 bg-info text-light border border-info border-3">ตรวจรางวัลล็อตเตอรี่ Diversition</h1>
        <form method='post'>
            <div class="py-5 px-5 display-5">เลขล็อตเตอรี่ : <input class="border border-dark border-3 rounded-3 py-2 ps-4" type='text' name='lottory_check' size='25' maxlength="3" placeholder="กรอกเลขล็อตเตอรี่ 3 หลัก">
            <h1 class="py-5 px-5 mt-5 rounded-3 bg-warning"><?php if(isset($_POST['check_lotto'])){$lotto_num = $_POST['lottory_check'];check_lotto($lotto_num);}?></h1></div>
            <div><input class="py-3 px-5 btn btn-info btn-lg border border-secondary border-5 rounded-pill mb-5 ms-5"  type='submit' name='check_lotto' value='ตรวจรางวัล' style="width: 25%; font-size: 30px;"></div>
        </form></div>
</body>
</html>