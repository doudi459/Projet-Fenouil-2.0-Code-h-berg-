<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<div style="padding:0;margin:0">

    <table width="100%" height="100" cellspacing="0" cellpadding="0" border="0" bgcolor="#2a3644">
        <tbody><tr>
            <td>
                <table style="background:#2a3644;padding:40px 0 20px 0" width="800" cellspacing="0" cellpadding="0" border="0" align="center">
                    <tbody><tr>
                        <td>




                            <table style="margin:0 auto" width="600" cellspacing="0" cellpadding="0" border="0" bgcolor="#FFF" align="center">
                                <tbody><tr>
                                    <td style="padding:40px 0px 0px 0px" valign="top">
                                        <table cellspacing="0" cellpadding="0" border="0" align="center">
                                            <tbody><tr>
                                                <td class="m_6719834149957957635td-pad10-wide" style="padding:0px 20px 0px 20px;font-weight:600;font-size:13px;letter-spacing:0.025em;line-height:26px;color:#000;font-family:'Poppins',sans-serif;background:white" align="center">
                                                    <span style="font-weight:300;font-size:24px;letter-spacing:0.025em;line-height:23px;color:#8fbe00;font-family:'Poppins',sans-serif"  > {{$titre}} <br> </span>
                                                    <p>{{$Contenu}}</p>
                                            <span style="font-weight:300;font-size:24px;letter-spacing:0.025em;line-height:23px;color:#8fbe00;font-family:'Poppins',sans-serif"  > Decouvrez nos Articles Fenouil Deco-Presto <br> </span>

                                                    <p>  L'equipe fenouil vous invite à venir visiter notre site . Vous trouverez les meilleurs Articles de Décoration et de Bricolage </p>


                                                @foreach($Articles as $art)
                                                    <li style="text-align:left">
                                                        <li style="padding-bottom:50px">

                                                            <p style="float: left;width: 50%; ">
                                                                <img src="https://fenouildeco.000webhostapp.com/public/images/{{$art->imag}}"  style="width: 90%;height: 130px ;">
                                                            </p>
                                                            <p style="text-align: left;line-height:20px;float: left;;width: 45%;">
                                                                <span style="font-weight:100;font-size:17px;letter-spacing:0.025em;line-height:23px;color:#8fbe00;font-family:'Poppins',sans-serif">{{$art->titre}}.<span>

                                                                    <?php echo $art->Désignation ; ?>
                                                            </p>



                                                        </li>


                                                    </li>
                                                    @endforeach

                                                    <span style="font-weight:300;font-size:24px;letter-spacing:0.025em;line-height:23px;color:#8fbe00;font-family:'Poppins',sans-serif">Visité notre site <br> </span>

                                                    <p>Pour tout article acheté, l'équipe fenouil vous offre une réduction de plus de 50% sur le 2ème ! N'hésitez pas et venez nous voir ! Vous pouvez commander dès maintenant  </p>

                                                    <p>Fenouil fait tout!</p>

                                                    <table class="m_6719834149957957635table-button180" style="margin:0;border-radius:3px" width="220" height="45" cellspacing="0" cellpadding="0" border="0" bgcolor="#8FBE00" align="center">
                                                        <tbody><tr>
                                                            <td style="padding:5px 5px" valign="middle" align="center">
                                                                <a href="https://fenouildeco.000webhostapp.com/public" style="font-weight:500;font-size:17px;letter-spacing:0.025em;line-height:26px;color:#fff;font-family:'Poppins',sans-serif;text-decoration:none" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://url9788.noip.com/wf/click?upn%3DJshxIB7Q-2BcqxedHIg0Vt4iLjq-2F-2FJbnxQvyw3ShYEHvJeVNxkUKzX2v8lRf2Vj7xd815vSLHr-2BpzNziDwiccajf2ydbHOguGO-2FDYXOfUuAUD9EO0UBIiWfeEzNA-2FyfwrPgAb4I7H1hFt-2Fpw8Nd98cbdlGjaHYIgOXct4JP3iS6pWs1L8t40RNX-2BqSt2txml-2B3Yg6Ed1eemAc6I9bNOwhWZw-3D-3D_0f0igEdIkn6AjWyAjMRyyZFd2cKAuB-2FVzPi-2BqdOtZoDbhYN33FvdTUXFTqO3BTQZ71bVdqCxGJ9CCijDHZnBcEFn9YIzjmYgzcssJhWA2VHUtA6abZ5FRS9B-2B0Vb46Tych6tI8OJdgcLNY5ikhX6-2BLBzYQ-2FU4U0WxMTPWhYS6Y5JFVSCHW69X-2BR5XRykgy2g20zeRR7-2BjlATNw3N4r94n26AdInH4ev6Td1YVp3LZMqqMadigAWz7nehY7DvjI5u0LfWL6lwixjrjqnIlOVEZewBu4c5-2FB5rz38HTyuCGhoCqpFAmfjQKXqguaES7XlBhVfq9DEKmP1hVsBLAFQhrg-3D-3D&amp;source=gmail&amp;ust=1554416225166000&amp;usg=AFQjCNFKzrvqHc8aADijYXu2zcqhV-1uLQ">
                                                                    Rejoignez-nous
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        </tbody></table>

                                                    <br>
                                                </td>
                                            </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                </tbody></table>


                            <table style="margin:0 auto" width="480" height="120" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody><tr>
                                    <td class="m_6719834149957957635td-display-block-center-pad18" style="padding:18px 0px 0px 0px;font-weight:300;font-size:12px;letter-spacing:0.025em;line-height:20px;color:#ffffff;font-family:'Poppins',sans-serif" colspan="2" valign="top" align="center">
                                       Equipe Avengers <br>
                                        IBGBI Evry Val d'Essonne<br>
                                        France<br>

                                    </td>
                                </tr>
                                <tr>




                                </tr>
                                </tbody></table>

                        </td>
                    </tr>
                    </tbody></table>
            </td>
        </tr>
        </tbody></table>


    <img src="https://ci3.googleusercontent.com/proxy/ng2nF8UKbqKU8YdkBBHqB8xGUiI21JV_JQ6Bqcg-emki0z0D0Rgs3fH0P8LAQ-QrUMUlvQE7a1V4SI9wlXulE-rWFyhIkNXWfJtextD3pSV5fKOCLseElRRBCF91IFi3if4mcEwJOVIZE_gjrkyE6ln3ns3wzLtB-BO8kSVE11AUcdtrVZ2AjcCSL7I1hx50ok71nbCj22q_llnfMKRN4-sB6VASIf0Pi4caNSl6uSQX7wrIjWqREH2xmgqz5JPfASWQW880hkjftO04bbqDCV4JktUcU1m0W8Avd_1wNxkn74mavt_yoN5VsDz2ZCMkYFq27zpSPaV2D3GOuPagCpTMIuZsQLnfbXdydKSHj3rn9qdNAu6sELytBYpV6p7O2vor7ogEqkahEZBHHUCy7D84HVThafcQTdan7vv_5kR6trRnGQrOKU5rLNFPbQ7gleRr4bfbP4J7avNMrqDOCGfE4KAb-o0tmKhSWjOEjdPs3ccJhRdtiooPNZ6bg7yrmsXZqB3bjCtHM_oQBZyOEdHx0cgGFd97opRk8_GyMs9WyIK3Pm0Ltjpx7Q9r=s0-d-e1-ft#https://url9788.noip.com/wf/open?upn=0f0igEdIkn6AjWyAjMRyyZFd2cKAuB-2FVzPi-2BqdOtZoDbhYN33FvdTUXFTqO3BTQZWrGu3Wm5INBs2mVZQf-2F4eiRisvWPB5hf-2FYWdYPaQ-2FSqpTNCV2icl3i1KBYVWS0-2FxsWSiPOCYj3SAD2owoP3yp7-2BLpnFgV8RaiyN7mTWA-2Becfidl2iWveSWUxxVnudVjTHRpPyU3OZZpRI3JxfEce9ViOqeb0-2FyA8ntH6pZE759ifkErGyeIjgV6nbN30CcIv48jGo80FZtms6VuBLNle-2F3eEdHFgU5gRlUben09PLaIzVyT5jpXRG-2Ffn-2BSrriK4FSEiMs3v1feBLR7bNNdCqvw-3D-3D" alt="" style="height: 1px !important; width: 1px !important; border-width: 0px !important; margin: 0px !important; padding: 0px !important; display: none !important;" class="CToWUd" width="1" hidden="" height="1" border="0"><div class="yj6qo"></div><div class="adL">
    </div></div>


</body>