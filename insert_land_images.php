<?php
exit();

require_once $_SERVER["DOCUMENT_ROOT"]."/_config.php";

// Object.entries(document.querySelector(".lst_view").children).forEach(item => {
//     if(item[1].querySelector("img")) console.log(item[1].querySelector("img").src);
// });

$data = array(
    "2404619288" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240126_36/land_naver_1706254065416kJF2H_JPEG/1694673161288760.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240126_260/land_naver_17062540654168CpVo_JPEG/1694673162562291.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240126_209/land_naver_1706254065455jVdCh_JPEG/1694673163119902.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240126_146/land_naver_1706254065435IdjOq_JPEG/1694673161976107.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240126_204/land_naver_1706254065415zc91w_JPEG/1694673160384459.jpg?type=m70"
    ),
    "2401181594" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_117/land_naver_1704680585448T6kC9_JPEG/1701927920074000.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_16/land_naver_1704680585458GDnNh_JPEG/1701927924124462.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_203/land_naver_170468058692519yOV_JPEG/1701927996237149.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_94/land_naver_1704680586906vwI6b_JPEG/1701928213171329.jpeg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_299/land_naver_1704680585484vzHQV_JPEG/1701928213624718.jpeg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_187/land_naver_1704680585493S09wi_JPEG/1701928214055037.jpeg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_7/land_naver_1704680585497PvfFK_JPEG/1701928252453975.jpeg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_214/land_naver_17046805855375Bhji_JPEG/1701928252905306.jpeg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_141/land_naver_1704680586904w3GNW_JPEG/1701927922787495.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_194/land_naver_1704680585478A4to6_JPEG/1701927921214837.jpg?type=m70"
    ),
    "2401896476" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_170/land_naver_1704950290971tq0TQ_JPEG/86661687332579Ka.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_205/land_naver_1704950291051oXGpP_JPEG/65641687332579Zv.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_94/land_naver_1704950290923a81Y4_JPEG/72331687332579ll.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_218/land_naver_1704950290947sqxLQ_JPEG/10801687332579Mg.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_106/land_naver_1704950290959rPdij_JPEG/41171687332579qe.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_257/land_naver_1704950291090vRyJp_JPEG/70961687332579lz.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_41/land_naver_1704950290990Jc1zX_JPEG/97701687332579zQ.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_150/land_naver_1704950291058Jb14D_JPEG/68941687332579Tp.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240111_17/land_naver_1704950291080JHFqH_JPEG/49401687332579aW.jpg?type=m70"
    ),
    "2403672454" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_250/land_naver_1705890710293Atja9_JPEG/37D28841-058C-4993-968A-60EF0ED17524.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_136/land_naver_1705890710300VmBI0_JPEG/762F17CE-5CE2-4A05-821D-9B0C6A7E4DE6.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_23/land_naver_1705890710300WaKsJ_JPEG/10CB7F84-7731-43B2-A8DF-A220A24D47A8.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_58/land_naver_1705890710326H4NlN_JPEG/275B48C8-3B22-4E95-9F8B-1AC6B2BF706D.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_53/land_naver_1705890710301QyG17_JPEG/2898724C-3599-45E8-A75E-DC1587782931.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_199/land_naver_1705890710299i9HXN_JPEG/75D18780-EA9B-44C4-8D73-E699F21740C7.jpg?type=m70"
    ),
    "2401279865" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_257/land_naver_1704694326959hu9PJ_JPEG/1693550834549006.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_41/land_naver_1704694327024l2Ryu_JPEG/1693550852062453.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_285/land_naver_1704694326996NH2FC_JPEG/1693550868363769.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_122/land_naver_1704694327028vXbVl_JPEG/1693550882009674.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_18/land_naver_1704694327062DMvHE_JPEG/1693550895186295.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_13/land_naver_1704694327066r8mJB_JPEG/1693550910889512.jpg?type=m70"
    ),
    "2402542813" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_17/land_naver_1705304737389Ughyn_JPEG/temp_reg_image_1.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_204/land_naver_1705304737440CHNay_JPEG/temp_reg_image_2.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_57/land_naver_1705304737391X7mAb_JPEG/temp_reg_image_3.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_112/land_naver_1705304737401C9UQy_JPEG/temp_reg_image_4.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_58/land_naver_1705304737401US1md_JPEG/temp_reg_image_5.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_211/land_naver_1705304737394lvOTn_JPEG/temp_reg_image_6.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_201/land_naver_17053047373979NOFn_JPEG/temp_reg_image_7.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_251/land_naver_1705304737378NKcpM_JPEG/temp_reg_image_8.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_200/land_naver_1705304737379F3W7c_JPEG/temp_reg_image_9.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_209/land_naver_1705304737389MGw2Q_JPEG/temp_reg_image_10.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_110/land_naver_1705304737521ruMUx_JPEG/temp_reg_image_11.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_184/land_naver_1705304737526zFcOI_JPEG/temp_reg_image_12.jpg?type=m70"
    ),
    "2401176745" => array(
        "https://landthumb-phinf.pstatic.net/20240108_278/land_naver_1704679283647Lclpc_JPEG/633534a8eb2bf.633534a8eb2c2.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_157/land_naver_1704679283644OCISx_JPEG/633534ec0a5c1.633534ec0a5c4.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_294/land_naver_1704679283679m8y3O_JPEG/633535058403f.6335350584041.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_35/land_naver_1704679283644qs8iM_JPEG/633535188cae3.633535188cae6.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240108_216/land_naver_1704679283697sGym4_JPEG/6335352d18193.6335352d18195.jpg?type=m70"
    ),
    "2401780481" => array(
        "https://landthumb-phinf.pstatic.net/20240110_64/land_naver_17048728459753BO9g_JPEG/657155f3ae1f6.657155f3ae1f7.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_125/land_naver_1704872845967zslcX_JPEG/657155fa7543d.657155fa75440.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_161/land_naver_1704872845967QxWVu_JPEG/657155fd78940.657155fd78942.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_69/land_naver_1704872845968z4wwS_JPEG/65715603bdea9.65715603bdeab.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_40/land_naver_1704872845971enh2M_JPEG/6571560651ab5.6571560651ab7.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_25/land_naver_1704872845972CTS4x_JPEG/657156091e400.657156091e402.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_146/land_naver_1704872845968PuTJ4_JPEG/65715610aeffd.65715610aefff.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_268/land_naver_1704872845972PBPRX_JPEG/65715612d1686.65715612d1688.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_157/land_naver_1704872846002nTAjl_JPEG/657156176fa7f.657156176fa81.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_140/land_naver_1704872845968hWvBF_JPEG/6571561a0711c.6571561a0711e.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_109/land_naver_1704872845968WoTWt_JPEG/65715622d3695.65715622d3697.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240110_61/land_naver_1704872846017Ijrrc_JPEG/657156275a23b.657156275a23d.jpg?type=m70"
    ),
    "2401812360" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70"
    ),
    "2402473770" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_270/land_naver_1705293782258sJqMJ_JPEG/%C7%D1%BF%C11.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_30/land_naver_1705293782258uHW4n_JPEG/%C7%D1%BF%C12.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_167/land_naver_1705293782254d7Sw6_JPEG/%C7%D1%BF%C13.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_137/land_naver_1705293782255FKWtW_JPEG/%C7%D1%BF%C14.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_298/land_naver_1705293782255HF4cM_JPEG/%C7%D1%BF%C15.jpg?type=m70"
    ),
    "2402583398" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_12/land_naver_1705328586083g9VN6_JPEG/1705243586209520.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_198/land_naver_1705328586080cTvlN_JPEG/1705243586468059.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_79/land_naver_17053285860886qrs5_JPEG/1705243586761292.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_121/land_naver_1705328586081GpPxp_JPEG/1705243586988821.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_152/land_naver_1705328586079Qzt0Q_JPEG/1705243587223364.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_127/land_naver_1705328586082Xv3hQ_JPEG/1705243587484041.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_69/land_naver_1705328586078olaDQ_JPEG/1705243587734328.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_34/land_naver_1705328586079F8lCD_JPEG/1705243587995699.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_129/land_naver_1705328586081aqsLl_JPEG/1705243588176994.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_78/land_naver_1705328586081n8HU5_JPEG/1705243588407860.jpg?type=m70"
    ),
    "2402487512" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_23/land_naver_1705289048798Crap8_JPEG/15258468_2023101414184211.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_29/land_naver_1705289048799s5KX1_JPEG/15258468_202310141419011.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_59/land_naver_1705289048799yElTh_JPEG/15258468_2023101414194111.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_121/land_naver_1705289048799LB3Yz_JPEG/15258468_2023101414192711.jpg?type=m70"
    ),
    "2400650167" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240104_20/land_naver_1704346806673OiyxK_JPEG/lg.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240104_246/land_naver_1704346806658qlKKW_JPEG/lg.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240104_256/land_naver_1704346806652jQ5hG_JPEG/lg.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240104_131/land_naver_170434680666409brW_JPEG/lg.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240104_59/land_naver_1704346806722hEsqz_JPEG/lg.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240104_80/land_naver_1704346806693kEwnJ_JPEG/lg.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240104_285/land_naver_1704346806687tuK5c_JPEG/lg.jpg?type=m70"
    ),
    "2402840376" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240116_232/land_naver_170538770348551obF_JPEG/14888205_20241161516211.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240116_174/land_naver_1705387703479FrYhM_JPEG/14888205_202411615162511.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240116_146/land_naver_1705387703489gDY3t_JPEG/14888205_202411615162512.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240116_252/land_naver_1705387703476nulk4_JPEG/14888205_202411615162513.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240116_250/land_naver_1705387703476k3eBx_JPEG/14888205_202411615162514.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240116_273/land_naver_1705387703483LpOyD_JPEG/14888205_202411615162515.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240116_229/land_naver_1705387703491qqHzy_JPEG/14888205_202411615161311.jpg?type=m70"
    ),
    "2403928274" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240123_154/land_naver_1705970418568q4MRk_JPEG/14848870_2022101113354410.jpg?type=m70"
    ),
    "2402557778" => array(
        "https://landthumb-phinf.pstatic.net/20240115_5/land_naver_17053015710477DbR9_JPEG/1699587136552930.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_262/land_naver_17053015710466lLSb_JPEG/1699587137062619.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_242/land_naver_17053015710452Sm7a_JPEG/1699587137259624.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_119/land_naver_1705301571045L7VC7_JPEG/1699587137482222.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240115_180/land_naver_1705301571049ocU5g_JPEG/1699587136825269.jpg?type=m70"
    ),
    "2401498481" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_201/land_naver_1704770368747rtutJ_JPEG/%C7%B3%BC%AD%B8%AE1.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_51/land_naver_1704770368740amMQr_JPEG/%C7%B3%BC%AD%B8%AE2.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_14/land_naver_17047703687462hCfu_JPEG/%C7%B3%BC%AD%B8%AE3.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_204/land_naver_1704770368745gRhut_JPEG/%C7%B3%BC%AD%B8%AE4.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_146/land_naver_17047703687457Joye_JPEG/%C7%B3%BC%AD%B8%AE5.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_28/land_naver_1704770368745EOArJ_JPEG/%C7%B3%BC%AD%B8%AE6.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_14/land_naver_1704770368756YwaS7_JPEG/%C7%B3%BC%AD%B8%AE7.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_102/land_naver_17047703687504cpHa_JPEG/%C7%B3%BC%AD%B8%AE9.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_288/land_naver_1704770368820K5XNF_JPEG/%C7%B3%BC%AD%B8%AE14.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_59/land_naver_1704770368823CY8Qk_JPEG/%C7%B3%BC%AD%B8%AE15.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_237/land_naver_1704770368816bOFve_JPEG/%C7%B3%BC%AD%B8%AE11.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_187/land_naver_17047703687528kt7x_JPEG/%C7%B3%BC%AD%B8%AE8.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240109_153/land_naver_1704770368750aPW4H_JPEG/%C7%B3%BC%AD%B8%AE10.jpg?type=m70"
    ),
    "2400261188" => array(
        "https://landthumb-phinf.pstatic.net/20240124_276/land_naver_1706084406497Rtuyz_JPEG/14445475_20231116175854.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_130/land_naver_17060844065518rQG4_JPEG/14445475_2023111617594.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_281/land_naver_1706084406568yFXPP_JPEG/14445475_20231116175914.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_266/land_naver_1706084406540sgRiw_JPEG/14445475_2023111617599.jpg?type=m70"
    ),
    "2404156856" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_264/land_naver_17060627134262MTEj_JPEG/15076604_2023810125820.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_206/land_naver_17060627134259klQC_JPEG/15076604_2023810125837.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_298/land_naver_1706062713425y1GYv_JPEG/15076604_2023810125853.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_22/land_naver_17060627134266lu0S_JPEG/15076604_202381012591.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_114/land_naver_1706062713424w3Ukl_JPEG/15076604_2023810125915.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_117/land_naver_1706062713423YTUGO_JPEG/15076604_2023810125925.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240124_177/land_naver_1706062713425LRAxe_JPEG/15076604_2023810125939.jpg?type=m70"
    ),
    "2403667524" => array(
        "https://ssl.pstatic.net/static.land/static/service/20240124/article/thmb_detail.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_194/land_naver_1705884747791KsFtu_JPEG/14301851_20231518374615.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_107/land_naver_1705884747775uAXvT_JPEG/14301851_202361916143710.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_10/land_naver_1705884747780cU84O_JPEG/14301851_202361916143711.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_47/land_naver_17058847477751fpNx_JPEG/14301851_202361916143712.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_251/land_naver_1705884747776VgNBO_JPEG/14301851_20231518374614.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_80/land_naver_1705884747775AlS65_JPEG/14301851_20231518374613.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_128/land_naver_1705884747774MygEP_JPEG/14301851_20231518374612.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_6/land_naver_1705884747786A2OYD_JPEG/14301851_20231518374611.jpg?type=m70",
        "https://landthumb-phinf.pstatic.net/20240122_240/land_naver_1705884747775DUCTw_JPEG/14301851_202211110582612.jpg?type=m70"
    )
);

$response = array(
    "header" => array(
        "result" => "success",
        "message" => "데이터베이스 데이터 삽입 완료."
    ),
    "body" => array()
);

try {
    $pdo = new PDO(
        "mysql:host="._db_address.";dbname="._db_name.";charset=utf8mb4",
        _db_id,_db_pwd,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        )
    );

    foreach($data as $articleNo => $urls) {
        $source = "https://new.land.naver.com/houses?articleNo=".$articleNo;
        $stmt = $pdo->prepare("SELECT idx FROM `lands` WHERE `source` = :source");
        $stmt->bindValue(':source', $source);
        $stmt->execute();
        $idx = $stmt->fetchColumn();

        foreach($urls as $url) {
            $stmt = $pdo->prepare("INSERT INTO `land_images`(`land_idx`, `image_url`) VALUES (:land_idx, :image_url)");
            $stmt->bindValue(':land_idx', $idx);
            $stmt->bindValue(':image_url', $url);
            $result = $stmt->execute();
        
            if($result === false) {
                $response = array(
                    "header" => array(
                        "result" => "fail",
                        "message" => "데이터베이스 오류가 발생했습니다."
                    ),
                    "body" => array(
                        "url" => $url
                    )
                );
                goto response_handling;
            }
        }
    }

} catch (PDOException $e) {
    $response = array(
        "header" => array(
            "result" => "fail",
            "message" => "데이터베이스 오류가 발생했습니다."
        ),
        "body" => array(
            "e" => $e
        )
    );
    goto response_handling;
}

response_handling:
header('Content-type: application/json');
echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);