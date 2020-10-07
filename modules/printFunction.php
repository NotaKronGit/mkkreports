<?php
/**
 * Created by PhpStorm.
 * User: Admindb
 * Date: 12.02.2018
 * Time: 15:45
 */
function printHeaderKurskClock($firstDate, $secondDate)
{
    include '../../template/headerKurskClock.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderKurskGrinnland($firstDate, $secondDate)
{
    include '../../template/headerKurskGrinnland.php';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderOrelGrinnland($firstDate, $secondDate)
{
    include '../../template/headerOrelGrinnland.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderBelGrinnland($firstDate, $secondDate)
{
    include '../../template/headerBelGrinnland.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderKurskHotel($firstDate, $secondDate)
{
    include '../../template/headerKurskHotel.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderOrelHotel($firstDate, $secondDate)
{
    include '../../template/headerOrelHotel.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderBelHotel($firstDate, $secondDate)
{
    include '../../template/headerBelShelter.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderKurskCinema($firstDate, $secondDate)
{
    include '../../template/headerKurskCinema.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderBelCinema($firstDate, $secondDate)
{
    include '../../template/headerBelCinema.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderOrelCinema($firstDate, $secondDate)
{
    include '../../template/headerOreLCinema.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderDvorHotel($firstDate, $secondDate)
{
    include '../../template/headerDvorHotel.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}
function printHeaderArenda($firstDate, $secondDate)
{
    include '../../template/headerKurskArenda.html';
    echo "   Период: с " . $firstDate->format('d-m-Y') . " по " . $secondDate->format('d-m-Y') . "    </pre>  
</div>";
}


function printReportName($name){
    echo "<div class=\"reportName\">$name</div>";
}

function printHeadAct()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Наименование</th>\r\n";
    echo "\t\t<th>Единица измерения</th>\r\n";
    echo "\t\t<th>Количество</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadShelterAct()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Наименование номера</th>\r\n";
    echo "\t\t<th>Количество дней</th>\r\n";
    echo "\t\t<th>Количество гостей</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadShelterGuest()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Тип номера</th>\r\n";
    echo "\t\t<th>Количество поселений</th>\r\n";
    echo "\t\t<th>Количество гостей</th>\r\n";
    echo "\t\t<th>Количество сутко-ночей</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadCinemaSails()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Касса</th>\r\n";
    echo "\t\t<th>Дата и время продажи</th>\r\n";
    echo "\t\t<th>Наименование фильма</th>\r\n";
    echo "\t\t<th>Дата и время сеанса</th>\r\n";
    echo "\t\t<th>Зал</th>\r\n";
    echo "\t\t<th>Ряд</th>\r\n";
    echo "\t\t<th>Место</th>\r\n";
    echo "\t\t<th>Кассир</th>\r\n";
    echo "\t\t<th>Валюта</th>\r\n";
    echo "\t\t<th>Цена билета</th>\r\n";
    echo "\t\t<th>Серия</th>\r\n";
    echo "\t\t<th>Номер</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadBonus()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Номер карты</th>\r\n";
    echo "\t\t<th>Сумма пополнения</th>\r\n";
    echo "\t\t<th>Сумма начисленных бонусов</th>\r\n";
    echo "\t\t<th>Дата и время транзакции</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadDiscont()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Дата и время транзакции</th>\r\n";
    echo "\t\t<th>Номер карты</th>\r\n";
    echo "\t\t<th>Стоимость</th>\r\n";
    echo "\t\t<th>Наименование услуги</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadTopApp()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Категория аппарата</th>\r\n";
    echo "\t\t<th>Наименование аппарата</th>\r\n";
    echo "\t\t<th>Цена игры</th>\r\n";
    echo "\t\t<th>Количество игр</th>\r\n";
    echo "\t\t<th>Сумма оплат</th>\r\n";
        echo "\t</tr>\r\n";
}
function printHeadPeople()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Дата</th>\r\n";
    echo "\t\t<th>Сумма</th>\r\n";
    echo "\t\t<th>НДС 18%</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadArenda()
{
    echo "\t<tr>\r\n";
    echo "\t\t<th>Категория</th>\r\n";
    echo "\t\t<th>Название аппарата</th>\r\n";
    echo "\t\t<th>Дата по каждому дню расчетного периода</th>\r\n";
    echo "\t\t<th>Количество игр на каждом арендуемом аппарате в каждом расчетном периоде</th>\r\n";
    echo "\t\t<th>Сумма(Очки - деньги)</th>\r\n";
    echo "\t</tr>\r\n";
}
function printHeadMkksrv($firstDate, $secondDate)
{
    echo "\t<tr>\r\n";
    echo "\t\t<th rowspan='2' >№п/п</th>\r\n";
    echo "\t\t<th rowspan='2'>№ карты</th>\r\n";
    echo "\t\t<th colspan='3'>Баланс на ".$firstDate->format('d-m-Y')."</th>\r\n";
    echo "\t\t<th colspan='3'>Приход</th>\r\n";
    echo "\t\t<th colspan='3'>Расход</th>\r\n";
    echo "\t\t<th colspan='3'>Баланс на ".$secondDate->format('d-m-Y')."</th>\r\n";
    echo "\t</tr>\r\n";

    echo "\t<tr>\r\n";

    echo "\t\t<th>Рубли</th>\r\n";
    echo "\t\t<th>Пластиковая карта</th>\r\n";
    echo "\t\t<th>Бонусы</th>\r\n";

    echo "\t\t<th>Рубли</th>\r\n";
    echo "\t\t<th>Пластиковая карта</th>\r\n";
    echo "\t\t<th>Бонусы</th>\r\n";

    echo "\t\t<th>Рубли</th>\r\n";
    echo "\t\t<th>Пластиковая карта</th>\r\n";
    echo "\t\t<th>Бонусы</th>\r\n";

    echo "\t\t<th>Рубли</th>\r\n";
    echo "\t\t<th>Пластиковая карта</th>\r\n";
    echo "\t\t<th>Бонусы</th>\r\n";

    echo "\t</tr>\r\n";
}


function printBodyActSumm($income){
    $sum = 0;
    if ($income==NULL){
        echo "\t\t\t<td width='400 px'> </td>\r\n";
        echo "\t\t\t<td width='250px'> шт </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
    else
    foreach ($income as $value) {
        echo "\t\t<tr>\r\n";
        //foreach ($value as $data) {
        echo "\t\t\t<td width='400 px'>" . $value['Name'] . "</td>\r\n";
        echo "\t\t\t<td width='250px'>" . $value['R'] . "</td>\r\n";
        echo "\t\t\t<td width='200px'>" . number_format($value['Count'], 2, ',', '') . "</td>\r\n";
        $sum += $value['Count'];
        // }
        echo " \t\t</tr>\r\n";
    }
    printFooterActSumm($sum);
}
function printBodyActDopSumm($income, $dop){
    $sum = 0;

    if (($income==NULL)and($dop==NULL)){
        echo "\t\t\t<td width='400 px'> </td>\r\n";
        echo "\t\t\t<td width='250px'> шт </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
  else if($income!=NULL)
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='400 px'>" . $value['Name'] . "</td>\r\n";
            echo "\t\t\t<td width='250px'>" . $value['R'] . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format($value['Count'], 2, ',', '') . "</td>\r\n";
            $sum += $value['Count'];
            // }
            echo " \t\t</tr>\r\n";
        }
     if($dop!=NULL) {
            foreach ($dop as $value) {
                echo "\t\t<tr>\r\n";
                //foreach ($value as $data) {
                echo "\t\t\t<td width='400 px'>" . $value['Name'] . "</td>\r\n";
                echo "\t\t\t<td width='250px'>" . $value['R'] . "</td>\r\n";
                echo "\t\t\t<td width='200px'>" . number_format($value['Count'], 2, ',', '') . "</td>\r\n";
                $sum += $value['Count'];
                // }
                echo " \t\t</tr>\r\n";
            }
        }
    printFooterActSumm($sum);
}
function printBodyClockDopSumm($income, $dop){
    $sum = 0;

    if (($income==NULL)and($dop==NULL)){
        echo "\t\t\t<td width='400 px'> </td>\r\n";
        echo "\t\t\t<td width='250px'> шт </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
    else if($income!=NULL)
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='400 px'>" . $value['NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='250px'>шт</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format($value['COUNT_ALL'], 2, ',', '') . "</td>\r\n";
            $sum += $value['COUNT_ALL'];
            // }
            echo " \t\t</tr>\r\n";
        }
    if($dop!=NULL) {
        foreach ($dop as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='400 px'>" . $value['Name'] . "</td>\r\n";
            echo "\t\t\t<td width='250px'>" . $value['R'] . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format($value['Count'], 2, ',', '') . "</td>\r\n";
            $sum += $value['Count'];
            // }
            echo " \t\t</tr>\r\n";
        }
    }
    printFooterActSumm($sum);
}
function printBodyAct($income){

            echo "\t\t<tr>\r\n";

    if ($income==NULL){
        echo "\t\t\t<td width='400 px'> </td>\r\n";
        echo "\t\t\t<td width='250px'> шт </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
    else{
            echo "\t\t\t<td width='400 px'>" . $income[0]['NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='250px'>шт</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format($income[0]['COUNT_ALL'], 2, ',', ' ') . "</td>\r\n";
             }
            echo " \t\t</tr>\r\n";
    }
function printBodyCinemaSails($income){
$sum=0;
$col=0;

    if ($income==NULL){
        echo "\t\t<tr>\r\n";
        echo "\t\t\t<td width='50 px'></td>\r\n";
        echo "\t\t\t<td width='100 px'></td>\r\n";
        echo "\t\t\t<td width='200 px'></td>\r\n";
        echo "\t\t\t<td width='100 px'></td>\r\n";
        echo "\t\t\t<td width='50 px'></td>\r\n";
        echo "\t\t\t<td width='50 px'></td>\r\n";
        echo "\t\t\t<td width='50 px'></td>\r\n";
        echo "\t\t\t<td width='100 px'></td>\r\n";
        echo "\t\t\t<td width='100 px'></td>\r\n";
        echo "\t\t\t<td width='50 px'></td>\r\n";
        echo "\t\t\t<td width='50 px'></td>\r\n";
        echo "\t\t\t<td width='50 px'></td>\r\n";
        echo " \t\t</tr>\r\n";
    }
    else{
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            echo "\t\t\t<td width='100 px'>" . $value['NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='100 px'>" . $value['OP_DATETIME'] . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . $value['FILM_NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='100 px'>" . $value['BEGINTIME'] . "</td>\r\n";
            echo "\t\t\t<td width='50px'>" . $value['HALL_NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='50px'>" . $value['ROW_NUM'] . "</td>\r\n";
            echo "\t\t\t<td width='50px'>" . $value['PLACE_NUM'] . "</td>\r\n";
            echo "\t\t\t<td width='100px'>" . $value['CASHIER_NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='100px'>" . $value['CURR_NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='50px'>" . number_format($value['PRICE'], 2, ',', ' ') . "</td>\r\n";
            echo "\t\t\t<td width='50px'>" . $value['SERIES'] . "</td>\r\n";
            echo "\t\t\t<td width='50px'>" . $value['TICKET_NUMBER'] . "</td>\r\n";
            echo " \t\t</tr>\r\n";
            $col++;
            $sum+=$value['PRICE'];
        }

        echo "\t\t<tr>\r\n";
        echo "\t\t\t<td colspan=\"6\" align='right'>ИТОГО БИЛЕТОВ: $col </td>\r\n";
        echo "\t\t\t<td colspan=\"6\" align='right'>ИТОГО Сумма: " . number_format($sum, 2, ',', ' ') . " </td>\r\n";
             echo "\t\t</tr>\r\n";
    }

}
function printBodyActSummShelter($income){
    $day=0;
    $q=0;

    if ($income==NULL){
        echo "\t\t\t<td width='300 px'> </td>\r\n";
        echo "\t\t\t<td width='200px'> 0 </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
    else
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='300 px'>" . $value['NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format($value['DIFDOUBLE'], 0, ',', ' ') . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" .number_format($value['Q'], 0,'',' '). "</td>\r\n";
            $day+=$value['DIFDOUBLE'];
            $q+=$value['Q'];
            // }
            echo " \t\t</tr>\r\n";
        }
    printFooterActSummShelter($day,$q);
}
function printBodyActSummGuest($income){
    $quant=0;
    $q=0;
    $day=0;
    if ($income==NULL){
        echo "\t\t\t<td width='300 px'> </td>\r\n";
        echo "\t\t\t<td width='200px'> 0 </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
    else
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='300 px'>" . $value['NAME'] . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format($value['QUANT'], 0, ',', ' ') . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" .number_format($value['GUESTS'], 0,'',' '). "</td>\r\n";
            echo "\t\t\t<td width='200px'>" .number_format($value['NIGHT'], 0,'',' '). "</td>\r\n";
            $quant+=$value['QUANT'];
            $q+=$value['GUESTS'];
            $day+=$value['NIGHT'];
            // }
            echo " \t\t</tr>\r\n";
        }
    printFooterActSummGuest($quant,$q,$day);
}
function printBodyBonus($income){
    $summ=0;
    $opsumm=0;
    $day=0;
    if ($income==NULL){
        echo "\t\t\t<td width='200 px'> </td>\r\n";
        echo "\t\t\t<td width='200px'> 0 </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
        echo "\t\t\t<td width='400px'>0 </td>\r\n";
    }
    else
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='200 px'>" . $value['CARD'] . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format($value['OPSUMM'], 0, ',', ' ') . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" .number_format($value['SUMM'], 0,'',' '). "</td>\r\n";
            echo "\t\t\t<td width='400px'>" .$value['DATE']->format('d-m-Y H:i'). "</td>\r\n";
            $summ+=$value['SUMM'];
            $opsumm+=$value['OPSUMM'];
            //$day+=$value['NIGHT'];
            // }

        }
    echo " \t\t</tr>\r\n";
    echo "\t\t<tr>\r\n";
    echo "\t\t\t<td  align='right'>ИТОГО:  </td>\r\n";
    echo "\t\t\t<td >" . number_format($opsumm, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td >" . number_format($summ, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td width='400px'> </td>\r\n";
    echo "\t\t</tr>\r\n";
    //printFooterActSummGuest($quant,$q,$day);
}
function printBodyDiscont($income){
    $summ=0;
    $count=0;

    if ($income==NULL){
        echo "\t\t\t<td width='200 px'> </td>\r\n";
        echo "\t\t\t<td width='200px'> 0 </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
        echo "\t\t\t<td width='400px'>0 </td>\r\n";
    }
    else
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";

            echo "\t\t\t<td width='400px'>" .$value['DATE']->format('d-m-Y H:i'). "</td>\r\n";
            echo "\t\t\t<td width='200 px'>" . $value['CARD'] . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" .$value['Name']. "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format(abs($value['VALUE']), 0, ',', ' ') . "</td>\r\n";

            $summ+=abs($value['VALUE']);
            $count++;


        }
    echo " \t\t</tr>\r\n";
    echo "\t\t<tr>\r\n";
    echo "\t\t\t<td  align='right'>ИТОГО начислено:  </td>\r\n";
    echo "\t\t\t<td >" . number_format($count, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td>на сумму:  </td>\r\n";
    echo "\t\t\t<td >" . number_format($summ, 2, ',', ' ') . "</td>\r\n";
        echo "\t\t</tr>\r\n";
    //printFooterActSummGuest($quant,$q,$day);
}
function printBodyTopApp($income){
    $summ=0;
    $count=0;
    $category="";
    if ($income==NULL){
        echo "\t\t\t<td width='350 px'> </td>\r\n";
        echo "\t\t\t<td width='350px'> 0 </td>\r\n";
        echo "\t\t\t<td width='100px'> 0 </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
    else
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            if($value['CatName']!=$category) {
                $colCount=count($income);
                echo "\t\t\t<td rowspan='".$colCount."' width='400px'>" . $value['CatName'] . "</td>\r\n";
                $category=$value['CatName'];
            }
            echo "\t\t\t<td width='300 px'>" . $value['Name'] . "</td>\r\n";
            echo "\t\t\t<td width='100px'>" . number_format(abs($value['Price']), 0, ',', ' ') . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format(abs($value['Count']), 0, ',', ' ') . "</td>\r\n";
            echo "\t\t\t<td width='200px'>" . number_format(abs($value['Summ']), 0, ',', ' ') . "</td>\r\n";


            $summ+=abs($value['Summ']);
            $count+=$value['Count'];


        }
  /*  echo " \t\t</tr>\r\n";
    echo "\t\t<tr>\r\n";
   // echo "\t\t\t<td  align='right'></td>\r\n";
    echo "\t\t\t<td colspan=\"2\" align='right'>ИТОГО игр:  </td>\r\n";
    echo "\t\t\t<td >" . number_format($count, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td>на сумму:  </td>\r\n";
    echo "\t\t\t<td >" . number_format($summ, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t</tr>\r\n";*/
    //printFooterActSummGuest($quant,$q,$day);
}
function printBodyPeople($income){
    $sum = 0;
    $sumnds=0;
    if ($income==NULL){
        echo "\t\t\t<td width='400 px'> </td>\r\n";
        echo "\t\t\t<td width='250px'> шт </td>\r\n";
        echo "\t\t\t<td width='200px'>0 </td>\r\n";
    }
    else
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='400 px'>" .$value['SHIFTDATE']->format('d-m-Y'). "</td>\r\n";
            echo "\t\t\t<td width='225px'>" . number_format($value['PAYSUM'], 2, ',', '') . "</td>\r\n";
            echo "\t\t\t<td width='225px'>" . number_format(($value['PAYSUM']*0.18), 2, ',', '') . "</td>\r\n";
            $sum += $value['PAYSUM'];
            $sumnds+=($value['PAYSUM']*0.18);

            // }
            echo " \t\t</tr>\r\n";
        }
    printFooterPeopleSum($sum,$sumnds);
}
function printBodyArendaSumm($income, $dop){
    $sumToken = 0;
    $sumPoints=0;

    if (($income==NULL)and($dop==NULL)){
        echo "\t\t\t<td width='150px'> </td>\r\n";
        echo "\t\t\t<td width='150px'>  </td>\r\n";
        echo "\t\t\t<td width='150px'> </td>\r\n";
        echo "\t\t\t<td width='150px'>0 </td>\r\n";
        echo "\t\t\t<td width='150px'>0 </td>\r\n";
    }
    else if($income!=NULL) {
        foreach ($income as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='150 px'>Спортивыне симуляторы</td>\r\n";
            echo "\t\t\t<td width='150 px'>Космический баскетбол</td>\r\n";
            echo "\t\t\t<td width='150px'>" . $value['DATE']->format('d-m-Y') . "</td>\r\n";
            echo "\t\t\t<td width='150px'>" . number_format($value['TOKENS'], 0, ',', '') . "</td>\r\n";
            echo "\t\t\t<td width='150px'>" . number_format($value['POINTS'], 2, ',', '') . "</td>\r\n";
            $sumToken += $value['TOKENS'];
            $sumPoints += $value['POINTS'];
            // }
            echo " \t\t</tr>\r\n";
              }
        printFooterArendaSum($sumToken,$sumPoints);
    }
       if($dop!=NULL) {
        $sumToken = 0;
        $sumPoints=0;
        foreach ($dop as $value) {
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td width='150 px'>Спортивыне симуляторы</td>\r\n";
            echo "\t\t\t<td width='150 px'>".$value['MACHINE_NAME']."</td>\r\n";
            echo "\t\t\t<td width='150px'>".$value['DATE']->format('d-m-Y')."</td>\r\n";
            echo "\t\t\t<td width='150px'>" . number_format($value['TOKENS'], 0, ',', '') . "</td>\r\n";
            echo "\t\t\t<td width='150px'>" . number_format($value['POINTS'], 2, ',', '') . "</td>\r\n";
            $sumToken += $value['TOKENS'];
            $sumPoints+=$value['POINTS'];
            // }
            echo " \t\t</tr>\r\n";
        }
        printFooterArendaSum($sumToken,$sumPoints);
    }
  //printFooterActSumm($sum);
}
function printBodyMkksrv($income){
    $firstBalSumNal = 0;
    $firstBalSumCard = 0;
    $firstBalSumBonus = 0;

    $inSumNal = 0;
    $inSumCard = 0;
    $inSumBonus = 0;

    $outBalSumNal = 0;
    $outBalSumCard = 0;
    $outBalSumBonus = 0;

    $secondBalSumNal = 0;
    $secondBalSumCard = 0;
    $secondBalSumBonus = 0;

    $id=0;
            foreach ($income as $value) {
                $id++;
            echo "\t\t<tr>\r\n";
            //foreach ($value as $data) {
            echo "\t\t\t<td>" .$id. "</td>\r\n";
            echo "\t\t\t<td>". $value['cardN'] . "</td>\r\n";

            echo "\t\t\t<td>" . number_format(($value['starting_balance_11']), 2, ',', '') . "</td>\r\n";
            echo "\t\t\t<td>" . number_format(($value['starting_balance_12']), 2, ',', '') . "</td>\r\n";
            echo "\t\t\t<td>" . number_format(($value['starting_balance_1']), 2, ',', '') . "</td>\r\n";

           echo "\t\t\t<td>" . number_format(($value['order_112']), 2, ',', '') . "</td>\r\n";
           echo "\t\t\t<td>" . number_format(($value['order_122']), 2, ',', '') . "</td>\r\n";
           echo "\t\t\t<td>" . number_format(($value['order_12']), 2, ',', '') . "</td>\r\n";

            echo "\t\t\t<td>" . number_format(($value['order_111']), 2, ',', '') . "</td>\r\n";
            echo "\t\t\t<td>" . number_format(($value['order_121']), 2, ',', '') . "</td>\r\n";
            echo "\t\t\t<td>" . number_format(($value['order_11']), 2, ',', '') . "</td>\r\n";

            echo "\t\t\t<td>" . number_format(($value['ending_balance_11']), 2, ',', '') . "</td>\r\n";
            echo "\t\t\t<td>" . number_format(($value['ending_balance_12']), 2, ',', '') . "</td>\r\n";
            echo "\t\t\t<td>" . number_format(($value['ending_balance_1']), 2, ',', '') . "</td>\r\n";
         //   $sum += $value['PAYSUM'];
          //  $sumnds+=($value['PAYSUM']*0.18);

                $inSumNal += $value['order_112'];
                $inSumCard += $value['order_122'];
                $inSumBonus += $value['order_12'];

                $outBalSumNal +=$value['order_111'];
                $outBalSumCard += $value['order_121'];
                $outBalSumBonus += $value['order_11'];

            // }
            echo " \t\t</tr>\r\n";
        }
    echo "\t\t<tr>\r\n";
    echo "\t\t\t<td colspan=\"2\" align='right'>ИТОГО:  </td>\r\n";

    echo "\t\t\t<td>0</td>\r\n";
    echo "\t\t\t<td>0</td>\r\n";
    echo "\t\t\t<td>0</td>\r\n";

    echo "\t\t\t<td>" . number_format($inSumNal, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td>" . number_format($inSumCard, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td>" . number_format($inSumBonus, 2, ',', ' ') . "</td>\r\n";

    echo "\t\t\t<td>" . number_format($outBalSumNal, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td>" . number_format($outBalSumCard, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td>" . number_format($outBalSumBonus, 2, ',', ' ') . "</td>\r\n";

    echo "\t\t\t<td>0</td>\r\n";
    echo "\t\t\t<td>0</td>\r\n";
    echo "\t\t\t<td>0</td>\r\n";


    echo "\t\t</tr>\r\n";
}


function printFooterActSumm($sum)
    {
        echo "\t\t<tr>\r\n";
        echo "\t\t\t<td colspan=\"2\" align='right'>ИТОГО:  </td>\r\n";
        echo "\t\t\t<td width='200px'>" . number_format($sum, 2, ',', ' ') . "</td>\r\n";
        echo "\t\t</tr>\r\n";
    }
function printFooterActSummShelter($day,$q)
{
    echo "\t\t<tr>\r\n";
    echo "\t\t\t<td>ИТОГО:  </td>\r\n";
    echo "\t\t\t<td width='200px'>" . number_format($day, 0, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td width='200px'>" . number_format($q, 0, ',', ' ') . "</td>\r\n";
    echo "\t\t</tr>\r\n";
}
function printFooterPeopleSum($sum,$sumNds)
{
    echo "\t\t<tr>\r\n";
    echo "\t\t\t<td>ИТОГО:  </td>\r\n";
    echo "\t\t\t<td width='225px'>" . number_format($sum, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td width='225px'>" . number_format($sumNds, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t</tr>\r\n";
}
function printFooterArendaSum($sumToken,$sumPoints)
{
    echo "\t\t<tr>\r\n";
    echo "\t\t\t<td colspan=\"3\" align='right'>ИТОГО:  </td>\r\n";
    echo "\t\t\t<td width='225px'>" . number_format($sumToken, 0, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td width='225px'>" . number_format($sumPoints, 2, ',', ' ') . "</td>\r\n";
    echo "\t\t</tr>\r\n";
}
function printFooterActSummGuest($quant,$q,$day)
{
    echo "\t\t<tr>\r\n";
    echo "\t\t\t<td>ИТОГО:  </td>\r\n";
    echo "\t\t\t<td width='200px'>" . number_format($quant, 0, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td width='200px'>" . number_format($q, 0, ',', ' ') . "</td>\r\n";
    echo "\t\t\t<td width='200px'>" . number_format($day, 0, ',', ' ') . "</td>\r\n";
    echo "\t\t</tr>\r\n";
}

?>