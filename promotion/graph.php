<?
	require_once($_SERVER['DOCUMENT_ROOT'] . "/xajax/rating.common.php");
	$xajax->printJavascript('/xajax/');
?>
<script type="text/javascript">
    window.addEvent('domready', function() {
//loadGraph('year', {"data":{"10":{"2010-11-23":0,"2010-11-30":0},"11":{"2010-12-08":0,"2010-12-16":0,"2010-12-23":"1.00"}},"cur":12,"days":365,"regdate":"2010-11-23"});
//loadGraph('prev', {"hilight":[5,6,12,13,19,20,26,27],"pro":[[15,22]],"data":[500,500,-500,500,599,599,586,2219.46,2219.46,2220.46,2221.46,2222.46,2222.46,2223.46,2681.352,2682.552,2683.752,2683.752,2683.752,2683.752,2683.752,2712.432,2261.36,2262.36,2263.36,2264.36,2265.36,2266.36],"days":"28","startdate":"2011-02-01"});
//loadGraph('year', {"pro":[[0,29],[29,58],[58,86],[86,117],[117,147]],"data":[{"2011-01-08":31311.648,"2011-01-16":31542.048,"2011-01-23":31768.848,"2011-01-31":32028.612},{"2011-02-08":32494.212,"2011-02-15":32733.732,"2011-02-22":32983.332,"2011-02-28":39937.1184},{"2011-03-08":33331.86,"2011-03-16":33609.06,"2011-03-23":33855.06,"2011-03-31":34103.46},{"2011-04-08":34103.46}],"cur":4,"days":365,"regdate":"2009-12-06"});
//loadGraph('year', {"pro":[[0,17],[17,48],[48,76],[76,364]],"data":[{"2011-01-08":89791.848,"2011-01-16":89796.648,"2011-01-23":89877.048,"2011-01-31":92436.888},{"2011-02-08":94360.968,"2011-02-15":94552.848,"2011-02-22":94716.048,"2011-02-28":94881.648},{"2011-03-08":98598.648,"2011-03-16":98681.448,"2011-03-23":100079.448,"2011-03-31":101410.248},{"2011-04-08":101410.248}],"cur":4,"days":365,"regdate":"2009-12-06"});
//loadGraph('year', {"data":{"2":{"2011-03-16":null,"2011-03-23":null,"2011-03-31":null},"3":{"2011-04-08":"44.22"}},"cur":4,"days":365,"regdate":"2011-03-16"});
// loadGraph('year', {"pro":[[45,52],[73,80]],"data":[{"2011-01-08":null,"2011-01-16":null,"2011-01-23":null,"2011-01-31":null},{"2011-02-08":null,"2011-02-15":0,"2011-02-22":0,"2011-02-28":null},{"2011-03-08":null,"2011-03-16":0,"2011-03-23":null,"2011-03-31":null},{"2011-04-08":null,"2011-04-16":null,"2011-04-23":null,"2011-04-30":null},{"2011-05-08":null}],"cur":5,"days":365,"regdate":"2010-10-25"});
//loadGraph('month', {"hilight":[3,4,10,11,17,18,24,25,31],"cur":19,"pro":{"1002":[8,11]},"data":[-987.5,-987.5,-987.5,-987.5,-987.5,-987.5,-987.5,-1185,-1185,-1185,-1185,-987.5,-987.5,-987.5,-987.5,-987.5,-987.5,-987.5,-789.83],"days":"31","startdate":"2012-03-01"});
//loadGraph('year', {"pro":{"1000":[0,2],"1001":[56,59],"1002":[67,70]},"data":[{"2012-01-08":null,"2012-01-16":null,"2012-01-23":null,"2012-01-31":null},{"2012-02-08":null,"2012-02-16":null,"2012-02-23":null,"2012-02-29":0},{"2012-03-08":null,"2012-03-16":null}],"cur":3,"days":366,"regdate":"2009-10-06"});
        xajax_GetRating('month'<?= $login ? ", '$login'" : '' ?>);
        document.getElement('select[name=ratingmode]').addEvent('change', function() {
            xajax_GetRating(this.get('value')<?= $login ? ", '$login'" : '' ?>);
        });
    });
</script>
<div class="month-rate-graph">
    <? if(preg_match( "'Opera.*?Version/10\.10'si", $_SERVER['HTTP_USER_AGENT'])) { ?>
    <iframe src="/promotion/graph.fix.php" width="750" height="233" frameborder="0" scrolling="no"></iframe>
    <? } else { ?>
    <h3 class="b-page__iphone">������ ��������� ��������</h3>
    <select name="ratingmode">
        <option value="month">� ���� ������</option>
        <option value="prev">� ������� ������</option>
        <option value="year">�� ���</option>
    </select>
    <h3 class="b-page__desktop b-page__ipad">������ ��������� ��������</h3>
    <div id="raph"></div>
    <? } ?>
</div>