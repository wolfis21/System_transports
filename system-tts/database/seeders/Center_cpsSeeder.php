<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Center_cpsSeeder extends Seeder
{
    private $CENTER_OPS_JSON = '
    {
        "center_cps": [
            {
              "name_ref": "11",
              "coordenada": "https://www.google.com/maps/place/11/data=!4m7!3m6!1s0x8dcbff4210ab383d:0x3f518cb6b148f49!8m2!3d8.2492066!4d-62.8094387!16s%2Fg%2F1tlbq5vn!19sChIJPTirEEL_y40RSY8Ua8sY9QM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "2DA",
              "coordenada": "https://www.google.com/maps/place/2DA/data=!4m7!3m6!1s0x8dcbfa24baba0673:0x91bbc4990734f6b7!8m2!3d8.315674!4d-62.7214783!16s%2Fg%2F1td4qrmt!19sChIJcwa6uiT6y40Rt_Y0B5nEu5E?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "8",
              "coordenada": "https://www.google.com/maps/place/8/data=!4m7!3m6!1s0x8dcbf93b8902284f:0x24616eee6491fcf5!8m2!3d8.2796574!4d-62.7638197!16s%2Fg%2F1tg4xx29!19sChIJTygCiTv5y40R9fyRZO5uYSQ?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Aeropuerto",
              "coordenada": "https://www.google.com/maps/place/Aeropuerto/data=!4m7!3m6!1s0x8dcbf96b0a9a5daf:0xadc8d50f698783eb!8m2!3d8.2875935!4d-62.7530211!16s%2Fg%2F1thn6kg7!19sChIJr12aCmv5y40R64OHaQ_VyK0?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Alta Vista",
              "coordenada": "https://www.google.com/maps/place/Alta+Vista/data=!4m7!3m6!1s0x8dcbfbd456c89ebb:0xc89a3e3d20e27012!8m2!3d8.2992427!4d-62.7289738!16s%2Fg%2F11c1qshsyy!19sChIJu57IVtT7y40REnDiID0-msg?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Alta Vista",
              "coordenada": "https://www.google.com/maps/place/Alta+Vista/data=!4m7!3m6!1s0x8dcbfbd45f079d3b:0x82b08126082f156b!8m2!3d8.2992373!4d-62.7281436!16s%2Fg%2F1tgljb__!19sChIJO50HX9T7y40RaxUvCCaBsII?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Alta Vista",
              "coordenada": "https://www.google.com/maps/place/Alta+Vista/data=!4m7!3m6!1s0x8dcbfbd50070ec5d:0xeb26ae2afd97117f!8m2!3d8.2995108!4d-62.7298039!16s%2Fg%2F1tgkjb5w!19sChIJXexwANX7y40RfxGX_SquJus?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Alta Vista",
              "coordenada": "https://www.google.com/maps/place/Alta+Vista/data=!4m7!3m6!1s0x8dcbfbd5d4ef59d9:0xa44ce36211127c1f!8m2!3d8.2972773!4d-62.7295585!16s%2Fg%2F1td6z4q5!19sChIJ2Vnv1NX7y40RH3wSEWLjTKQ?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Alta Vista Sur",
              "coordenada": "https://www.google.com/maps/place/Alta+Vista+Sur/data=!4m7!3m6!1s0x8dcbfbd924dc53b9:0xb693962417cb76c3!8m2!3d8.2878908!4d-62.7288222!16s%2Fg%2F1tcwh0np!19sChIJuVPcJNn7y40Rw3bLFySWk7Y?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Alta Vista VII",
              "coordenada": "https://www.google.com/maps/place/Alta+Vista+VII/data=!4m7!3m6!1s0x8dcbfbd61e73399f:0x34baa20eb0bb1fe7!8m2!3d8.2963258!4d-62.732293!16s%2Fg%2F1tfrhtk3!19sChIJnzlzHtb7y40R5x-7sA6iujQ?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Antonio José de Sucre I",
              "coordenada": "https://www.google.com/maps/place/Antonio+Jos%C3%A9+de+Sucre+I/data=!4m7!3m6!1s0x8dcbf0886c31ec4f:0x3f4708507e407c6b!8m2!3d8.349251!4d-62.68713!16s%2Fg%2F1wf22xc_!19sChIJT-wxbIjwy40Ra3xAflAIRz8?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Av Las Américas",
              "coordenada": "https://www.google.com/maps/place/Av+Las+Am%C3%A9ricas/data=!4m7!3m6!1s0x8dcbfa2df8c92c65:0x2d71ab44f4be8613!8m2!3d8.3059867!4d-62.720722!16s%2Fg%2F1thl6gxq!19sChIJZSzJ-C36y40RE4a-9ESrcS0?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Av Las Américas II",
              "coordenada": "https://www.google.com/maps/place/Av+Las+Am%C3%A9ricas+II/data=!4m7!3m6!1s0x8dcbfa2d09c0c04b:0xde9bd8a66a65f77b!8m2!3d8.3039112!4d-62.7225566!16s%2Fg%2F1tph2sf_!19sChIJS8DACS36y40Re_dlaqbYm94?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Av Las Américas III",
              "coordenada": "https://www.google.com/maps/place/Av+Las+Am%C3%A9ricas+III/data=!4m7!3m6!1s0x8dcbfa2dfea374cb:0x47ac157090072c4e!8m2!3d8.3061141!4d-62.7209634!16s%2Fg%2F1tm0cvxy!19sChIJy3Sj_i36y40RTiwHkHAVrEc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Av Las Américas IV",
              "coordenada": "https://www.google.com/maps/place/Av+Las+Am%C3%A9ricas+IV/data=!4m7!3m6!1s0x8dcbfa3a396f115b:0x785a7c9bca53bd0f!8m2!3d8.3125794!4d-62.7158672!16s%2Fg%2F1t_h_0j7!19sChIJWxFvOTr6y40RD71Typt8Wng?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Av Las Américas V",
              "coordenada": "https://www.google.com/maps/place/Av+Las+Am%C3%A9ricas+V/data=!4m7!3m6!1s0x8dcbfa2d0648cb3d:0x5698075c3807ddce!8m2!3d8.3038581!4d-62.7229697!16s%2Fg%2F1th580r0!19sChIJPctIBi36y40Rzt0HOFwHmFY?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Av Las Américas VI",
              "coordenada": "https://www.google.com/maps/place/Av+Las+Am%C3%A9ricas+VI/data=!4m7!3m6!1s0x8dcbfa308314edcf:0xceefc3125eaa6c77!8m2!3d8.3108144!4d-62.7170822!16s%2Fg%2F1tgl_0n8!19sChIJz-0UgzD6y40Rd2yqXhLD784?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Av Las Américas VI",
              "coordenada": "https://www.google.com/maps/place/Av+Las+Am%C3%A9ricas+VI/data=!4m7!3m6!1s0x8dcbfa308314edcf:0xceefc3125eaa6c77!8m2!3d8.3108144!4d-62.7170822!16s%2Fg%2F1tgl_0n8!19sChIJz-0UgzD6y40Rd2yqXhLD784?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Cachamay I",
              "coordenada": "https://www.google.com/maps/place/Cachamay+I/data=!4m7!3m6!1s0x8dcbfa4fa177b675:0xdd7e0e5aba935791!8m2!3d8.3083541!4d-62.6997471!16s%2Fg%2F1wrtdx77!19sChIJdbZ3oU_6y40RkVeTuloOft0?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Cachamay II",
              "coordenada": "https://www.google.com/maps/place/Cachamay+II/data=!4m7!3m6!1s0x8dcbfa4567227ab7:0xbdc18659c8288804!8m2!3d8.3100262!4d-62.69876!16s%2Fg%2F1wnf22by!19sChIJt3oiZ0X6y40RBIgoyFmGwb0?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Cachamay III",
              "coordenada": "https://www.google.com/maps/place/Cachamay+III/data=!4m7!3m6!1s0x8dcbfa4542adfb0d:0x300308b55f204609!8m2!3d8.3103022!4d-62.6985455!16s%2Fg%2F1tknlh5w!19sChIJDfutQkX6y40RCUYgX7UIAzA?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Cachamay IV",
              "coordenada": "https://www.google.com/maps/place/Cachamay+IV/data=!4m7!3m6!1s0x8dcbfa4ec71aabab:0xff9d693dc531009!8m2!3d8.3063211!4d-62.7020323!16s%2Fg%2F1tr7dvcp!19sChIJq6sax076y40RCRBT3JPW-Q8?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Castillito II",
              "coordenada": "https://www.google.com/maps/place/Castillito+II/data=!4m7!3m6!1s0x8dcbfa45af6c00bf:0xd9d370f42b6decde!8m2!3d8.3117301!4d-62.700541!16s%2Fg%2F1tgmx9w6!19sChIJvwBsr0X6y40R3uxtK_Rw09k?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Caujaro",
              "coordenada": "https://www.google.com/maps/place/Caujaro/data=!4m7!3m6!1s0x8dcbf8d361e1d46f:0x4cb5d203f852b0e!8m2!3d8.267952!4d-62.7853042!16s%2Fg%2F1tfm2hgz!19sChIJb9ThYdP4y40RDiuFPyBdywQ?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Caura I",
              "coordenada": "https://www.google.com/maps/place/Caura+I/data=!4m7!3m6!1s0x8dcbfbd71bf5431f:0x737ae8c5a0810da9!8m2!3d8.2942157!4d-62.7284038!16s%2Fg%2F1tdd1q_c!19sChIJH0P1G9f7y40RqQ2BoMXoenM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Churum Meru",
              "coordenada": "https://www.google.com/maps/place/Churum+Meru/data=!4m7!3m6!1s0x8dcbf96316d43f05:0xaab38e33ca444478!8m2!3d8.2910811!4d-62.7362627!16s%2Fg%2F1tvm3thh!19sChIJBT_UFmP5y40ReEREyjOOs6o?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Comando",
              "coordenada": "https://www.google.com/maps/place/Comando/data=!4m7!3m6!1s0x8dcbff65d12fc8db:0x530b615349a8ebe3!8m2!3d8.2436694!4d-62.8171366!16s%2Fg%2F1jkz3xgkk!19sChIJ28gv0WX_y40R4-uoSVNhC1M?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Dalla Costa",
              "coordenada": "https://www.google.com/maps/place/Dalla+Costa/data=!4m7!3m6!1s0x8dcbfa7b50be28f1:0x6718ae6537899bfb!8m2!3d8.3295436!4d-62.6917005!16s%2Fg%2F1tfc7nqn!19sChIJ8Si-UHv6y40R-5uJN2WuGGc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Dalla Costa III",
              "coordenada": "https://www.google.com/maps/place/Dalla+Costa+III/data=!4m7!3m6!1s0x8dcbfa7fd463edad:0x8595a2023126761c!8m2!3d8.3361942!4d-62.6856333!16s%2Fg%2F1tjkgv94!19sChIJre1j1H_6y40RHHYmMQKilYU?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Dalla Costa IV",
              "coordenada": "https://www.google.com/maps/place/Dalla+Costa+IV/data=!4m7!3m6!1s0x8dcbfa7b4fc93af1:0xc28318061fc53638!8m2!3d8.3295064!4d-62.6920491!16s%2Fg%2F1tyyy4rk!19sChIJ8TrJT3v6y40RODbFHwYYg8I?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "El Caimito",
              "coordenada": "https://www.google.com/maps/place/El+Caimito/data=!4m7!3m6!1s0x8dcbff2d0a505719:0xe3c2e4ad2135db17!8m2!3d8.2644536!4d-62.789526!16s%2Fg%2F1tj9vcq9!19sChIJGVdQCi3_y40RF9s1Ia3kwuM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "El Caimito",
              "coordenada": "https://www.google.com/maps/place/El+Caimito/data=!4m7!3m6!1s0x8dcbff31f704eaf3:0x7c209e5d0db493e1!8m2!3d8.2618417!4d-62.7920955!16s%2Fg%2F1tt1tr4b!19sChIJ8-oE9zH_y40R4ZO0DV2eIHw?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "El Modulo",
              "coordenada": "https://www.google.com/maps/place/El+Modulo/data=!4m7!3m6!1s0x8dcbfbc314e98d85:0x4580ca4d6062e82b!8m2!3d8.2851623!4d-62.7189893!16s%2Fg%2F1tfwldjn!19sChIJhY3pFMP7y40RK-hiYE3KgEU?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "El Trebol I",
              "coordenada": "https://www.google.com/maps/place/El+Trebol+I/data=!4m7!3m6!1s0x8dcbfa3b4262dead:0x9ec564fe0db526bb!8m2!3d8.315382!4d-62.7192467!16s%2Fg%2F1tjxgpxf!19sChIJrd5iQjv6y40Ruya1Df5kxZ4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "El Trebol IV",
              "coordenada": "https://www.google.com/maps/place/El+Trebol+IV/data=!4m7!3m6!1s0x8dcbfa3daa52ffd7:0x1880bf1fca5cb095!8m2!3d8.3186942!4d-62.7175355!16s%2Fg%2F1tfm2hg_!19sChIJ1_9Sqj36y40RlbBcyh-_gBg?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "El Trebol V",
              "coordenada": "https://www.google.com/maps/place/El+Trebol+V/data=!4m7!3m6!1s0x8dcbfa246b2d8563:0xce0e9cbeb50fb0e9!8m2!3d8.3154935!4d-62.7250296!16s%2Fg%2F1tx482ft!19sChIJY4UtayT6y40R6bAPtb6cDs4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "El Trebol VI",
              "coordenada": "https://www.google.com/maps/place/El+Trebol+VI/data=!4m7!3m6!1s0x8dcbfa246cbac547:0xb02307f444d424e9!8m2!3d8.3157058!4d-62.7249867!16s%2Fg%2F1td61s8_!19sChIJR8W6bCT6y40R6STURPQHI7A?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Grafitti",
              "coordenada": "https://www.google.com/maps/place/Grafitti/data=!4m7!3m6!1s0x8dcbfbd683cba5dd:0x8295075658d2634f!8m2!3d8.2968725!4d-62.7290046!16s%2Fg%2F1tfl17ry!19sChIJ3aXLg9b7y40RT2PSWFYHlYI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Ikabaru",
              "coordenada": "https://www.google.com/maps/place/Ikabaru/data=!4m7!3m6!1s0x8dcbf07eb1b4d313:0x27ead247355060ef!8m2!3d8.3422928!4d-62.6800382!16s%2Fg%2F11b77cy64v!19sChIJE9O0sX7wy40R72BQNUfS6ic?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Ikabaru I",
              "coordenada": "https://www.google.com/maps/place/Ikabaru+I/data=!4m7!3m6!1s0x8dcbf07eaf0b4a15:0x5a79e7d61018e298!8m2!3d8.3425261!4d-62.6800744!16s%2Fg%2F11b779zdks!19sChIJFUoLr37wy40RmOIYENbneVo?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Isla Dorada",
              "coordenada": "https://www.google.com/maps/place/Isla+Dorada/data=!4m7!3m6!1s0x8dcbff2703ff7c85:0xa6ef3d0f26bd0996!8m2!3d8.2537856!4d-62.781702!16s%2Fg%2F1td_cqwg!19sChIJhXz_Ayf_y40Rlgm9Jg8976Y?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Karuai",
              "coordenada": "https://www.google.com/maps/place/Karuai/data=!4m7!3m6!1s0x8dcbfbdb60f79a93:0xca1812103ac36b2f!8m2!3d8.2868079!4d-62.7222347!16s%2Fg%2F1tdq257l!19sChIJk5r3YNv7y40RL2vDOhASGMo?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "La 45 I",
              "coordenada": "https://www.google.com/maps/place/La+45+I/data=!4m7!3m6!1s0x8dcbf07fa04cc903:0x41d7c3db9b428dc7!8m2!3d8.3395458!4d-62.6825758!16s%2Fg%2F11b77ssgxw!19sChIJA8lMoH_wy40Rx41Cm9vD10E?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "La 45 III",
              "coordenada": "https://www.google.com/maps/place/La+45+III/data=!4m7!3m6!1s0x8dcbf07f1df06f1d:0xe5ddc18959ac64b5!8m2!3d8.340589!4d-62.681374!16s%2Fg%2F11b77dy3b6!19sChIJHW_wHX_wy40RtWSsWYnB3eU?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "La 45 IV",
              "coordenada": "https://www.google.com/maps/place/La+45+IV/data=!4m7!3m6!1s0x8dcbf07ee2ec8c07:0xe2b4b09a2fa0f6b7!8m2!3d8.3407217!4d-62.6815724!16s%2Fg%2F11b77l4h3j!19sChIJB4zs4n7wy40Rt_agL5qwtOI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "La 45 IV",
              "coordenada": "https://www.google.com/maps/place/La+45+IV/data=!4m7!3m6!1s0x8dcbf07ee2ec8c07:0xe2b4b09a2fa0f6b7!8m2!3d8.3407217!4d-62.6815724!16s%2Fg%2F11b77l4h3j!19sChIJB4zs4n7wy40Rt_agL5qwtOI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "La 45 IV",
              "coordenada": "https://www.google.com/maps/place/La+45+IV/data=!4m7!3m6!1s0x8dcbf07ee2ec8c07:0xe2b4b09a2fa0f6b7!8m2!3d8.3407217!4d-62.6815724!16s%2Fg%2F11b77l4h3j!19sChIJB4zs4n7wy40Rt_agL5qwtOI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Liceo Los Olivos I",
              "coordenada": "https://www.google.com/maps/place/Liceo+Los+Olivos+I/data=!4m7!3m6!1s0x8dcbfbc48ac3f89b:0x80df7f4d713ed91!8m2!3d8.2874821!4d-62.7178091!16s%2Fg%2F1tf9p9ff!19sChIJm_jDisT7y40Rke0T1_T3DQg?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Liceo Los Olivos I",
              "coordenada": "https://www.google.com/maps/place/Liceo+Los+Olivos+I/data=!4m7!3m6!1s0x8dcbfbc48ac3f89b:0x80df7f4d713ed91!8m2!3d8.2874821!4d-62.7178091!16s%2Fg%2F1tf9p9ff!19sChIJm_jDisT7y40Rke0T1_T3DQg?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Liceo Los Olivos II",
              "coordenada": "https://www.google.com/maps/place/Liceo+Los+Olivos+II/data=!4m7!3m6!1s0x8dcbfbc4628340d5:0x562833fabbe1a7d3!8m2!3d8.2870415!4d-62.7177018!16s%2Fg%2F1tjbt6ds!19sChIJ1UCDYsT7y40R06fhu_ozKFY?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Lomas del Caroní 1º",
              "coordenada": "https://www.google.com/maps/place/Lomas+del+Caron%C3%AD+1%C2%BA/data=!4m7!3m6!1s0x8dcbfed43e0b0cdb:0x3502b1aaf1f9989a!8m2!3d8.2616665!4d-62.7750689!16s%2Fg%2F1tdkc35z!19sChIJ2wwLPtT-y40Rmpj58aqxAjU?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Lomas del Caroní I",
              "coordenada": "https://www.google.com/maps/place/Lomas+del+Caron%C3%AD+I/data=!4m7!3m6!1s0x8dcbfed646099eb3:0xf3a054548e5e9114!8m2!3d8.2591448!4d-62.7775955!16s%2Fg%2F1tj4j2qv!19sChIJs54JRtb-y40RFJFejlRUoPM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Lomas del Caroní III",
              "coordenada": "https://www.google.com/maps/place/Lomas+del+Caron%C3%AD+III/data=!4m7!3m6!1s0x8dcbfed43fadc9cd:0xba57f21fb8868e3!8m2!3d8.2618947!4d-62.7751762!16s%2Fg%2F1tfts3vw!19sChIJzcmtP9T-y40R42iI-yF_pQs?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Los Olivos I",
              "coordenada": "https://www.google.com/maps/place/Los+Olivos+I/data=!4m7!3m6!1s0x8dcbfbc234f47231:0xc0504431171cf431!8m2!3d8.2835326!4d-62.715953!16s%2Fg%2F1tgcnb5s!19sChIJMXL0NML7y40RMfQcFzFEUMA?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Los Olivos III",
              "coordenada": "https://www.google.com/maps/place/Los+Olivos+III/data=!4m7!3m6!1s0x8dcbfbc651cb39e7:0x78ecc3ac75683ac!8m2!3d8.2889339!4d-62.7123374!16s%2Fg%2F1tj4j2qt!19sChIJ5znLUcb7y40RrINWxzrMjgc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Los Peregrinos",
              "coordenada": "https://www.google.com/maps/place/Los+Peregrinos/data=!4m7!3m6!1s0x8dcbfa3a0e92a0d5:0x17221b64c73fbd34!8m2!3d8.3113612!4d-62.7157679!16s%2Fg%2F1tgcz2tm!19sChIJ1aCSDjr6y40RNL0_x2QbIhc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Orinokia",
              "coordenada": "https://www.google.com/maps/place/Orinokia/data=!4m7!3m6!1s0x8dcbf96510f93841:0xbc84666f75f2dbb4!8m2!3d8.291474!4d-62.7421421!16s%2Fg%2F1w666g9q!19sChIJQTj5EGX5y40RtNvydW9mhLw?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada A.C Alto Voltaje Express",
              "coordenada": "https://www.google.com/maps/place/Parada+A.C+Alto+Voltaje+Express/data=!4m7!3m6!1s0x8dcc0078ca97a479:0x6ff96895ec7dd6f8!8m2!3d8.2248904!4d-62.8279919!16s%2Fg%2F11fxc1fl7j!19sChIJeaSXyngAzI0R-NZ97JVo-W8?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Alto Voltaje",
              "coordenada": "https://www.google.com/maps/place/Parada+Alto+Voltaje/data=!4m7!3m6!1s0x8dcbff652b5cf8bd:0x13934c256225e96e!8m2!3d8.2391329!4d-62.8173137!16s%2Fg%2F1jkyjdmy8!19sChIJvfhcK2X_y40RbuklYiVMkxM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "PARADA BTR TERMINAL DE PASAJEROS",
              "coordenada": "https://www.google.com/maps/place/PARADA+BTR+TERMINAL+DE+PASAJEROS/data=!4m7!3m6!1s0x8dcbf968c86318d5:0x8ad56a6e11ac2fd3!8m2!3d8.2877826!4d-62.7457865!16s%2Fg%2F11dx9f47b7!19sChIJ1RhjyGj5y40R0y-sEW5q1Yo?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Burguer",
              "coordenada": "https://www.google.com/maps/place/Parada+Burguer/data=!4m7!3m6!1s0x8dcbf98620628055:0x571da1b881394a86!8m2!3d8.2739585!4d-62.7797563!16s%2Fg%2F11fsmkq76p!19sChIJVYBiIIb5y40Rhko5gbihHVc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada de AC Gran Sabana Express",
              "coordenada": "https://www.google.com/maps/place/Parada+de+AC+Gran+Sabana+Express/data=!4m7!3m6!1s0x8dcc007f5e07806b:0xfb900b9564d62551!8m2!3d8.225814!4d-62.8270558!16s%2Fg%2F11dxkfst_0!19sChIJa4AHXn8AzI0RUSXWZJULkPs?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada de autobús Vista Alegre",
              "coordenada": "https://www.google.com/maps/place/Parada+de+autob%C3%BAs+Vista+Alegre/data=!4m7!3m6!1s0x8dcbf1567990a78b:0x96fff0435a10d131!8m2!3d8.3436757!4d-62.6458149!16s%2Fg%2F11q2vm4_g6!19sChIJi6eQeVbxy40RMdEQWkPw_5Y?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada de Autobuses Villa Jade",
              "coordenada": "https://www.google.com/maps/place/Parada+de+Autobuses+Villa+Jade/data=!4m7!3m6!1s0x8dcbfff456c40909:0xbb4732b75503998e!8m2!3d8.2201904!4d-62.815825!16s%2Fg%2F11gn26t5n3!19sChIJCQnEVvT_y40RjpkDVbcyR7s?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada de buses El Pao",
              "coordenada": "https://www.google.com/maps/place/Parada+de+buses+El+Pao/data=!4m7!3m6!1s0x8dcbf1cca10edde9:0x39dc8ce1b2516aaa!8m2!3d8.3509906!4d-62.6708808!16s%2Fg%2F11l8m16fp4!19sChIJ6d0Ooczxy40RqmpRsuGM3Dk?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "parada de Gran Saban Express A. C.",
              "coordenada": "https://www.google.com/maps/place/parada+de+Gran+Saban+Express+A.+C./data=!4m7!3m6!1s0x8dcbf97cbd807c5b:0xa3fadff0082eeb20!8m2!3d8.2939319!4d-62.737338!16s%2Fg%2F11fy4np8fz!19sChIJW3yAvXz5y40RIOsuCPDf-qM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada el Puentecito Unare",
              "coordenada": "https://www.google.com/maps/place/Parada+el+Puentecito+Unare/data=!4m7!3m6!1s0x8dcbf9fac42a426f:0x84f1457de15179b1!8m2!3d8.2833564!4d-62.751784!16s%2Fg%2F11sy3w6c6t!19sChIJb0IqxPr5y40RsXlR4X1F8YQ?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Los Bloques I",
              "coordenada": "https://www.google.com/maps/place/Parada+Los+Bloques+I/data=!4m7!3m6!1s0x8dcbf9399aa0e6f3:0xfbdb073f5f04e2c6!8m2!3d8.2764935!4d-62.7609819!16s%2Fg%2F1tkb64c0!19sChIJ8-agmjn5y40RxuIEXz8H2_s?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Mata de Tamarindo",
              "coordenada": "https://www.google.com/maps/place/Parada+Mata+de+Tamarindo/data=!4m7!3m6!1s0x8dcc01871bc17ae5:0x7a6a09ded0a46d7a!8m2!3d8.2254683!4d-62.83461!16s%2Fg%2F11nxgbtb__!19sChIJ5XrBG4cBzI0Rem2k0N4Jano?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Modulo de manoas",
              "coordenada": "https://www.google.com/maps/place/Parada+Modulo+de+manoas/data=!4m7!3m6!1s0x8dcbf01571a413cd:0xaca7b07edd180e0b!8m2!3d8.3555233!4d-62.6594974!16s%2Fg%2F11c6d_h_wg!19sChIJzROkcRXwy40RCw4Y3X6wp6w?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada para el triunfo, la sierra",
              "coordenada": "https://www.google.com/maps/place/Parada+para+el+triunfo,+la+sierra/data=!4m7!3m6!1s0x8dcbf11678f3c84d:0x8829c038d45871c3!8m2!3d8.3672685!4d-62.6426864!16s%2Fg%2F11j10j24yd!19sChIJTcjzeBbxy40Rw3FY1DjAKYg?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Paseo Caroni XII",
              "coordenada": "https://www.google.com/maps/place/Parada+Paseo+Caroni+XII/data=!4m7!3m6!1s0x8dcbf93b14e258c7:0x5638a522ec3d2d51!8m2!3d8.2785532!4d-62.7659923!16s%2Fg%2F1tdgl982!19sChIJx1jiFDv5y40RUS097CKlOFY?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Perla Caruachi",
              "coordenada": "https://www.google.com/maps/place/Parada+Perla+Caruachi/data=!4m7!3m6!1s0x8dcbfc83f3a12977:0x5c6b79009144863!8m2!3d8.2540722!4d-62.6782143!16s%2Fg%2F11dfh3fbq0!19sChIJdymh84P8y40RY0gUCZC3xgU?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Principal Sector el Guamo BTR",
              "coordenada": "https://www.google.com/maps/place/Parada+Principal+Sector+el+Guamo+BTR/data=!4m7!3m6!1s0x8dcbf95574476b73:0x92b69cf59bf056fa!8m2!3d8.2749491!4d-62.776189!16s%2Fg%2F11sy01k4bx!19sChIJc2tHdFX5y40R-lbwm_WctpI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Sierra Parima",
              "coordenada": "https://www.google.com/maps/place/Parada+Sierra+Parima/data=!4m7!3m6!1s0x8dcbff15076071df:0x8b44934904fbb529!8m2!3d8.2510283!4d-62.8024676!16s%2Fg%2F11thgnf655!19sChIJ33FgBxX_y40RKbX7BEmTRIs?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Subestación",
              "coordenada": "https://www.google.com/maps/place/Parada+Subestaci%C3%B3n/data=!4m7!3m6!1s0x8dcbef9cee83b8a1:0x2fa28a235e5ddfe!8m2!3d8.3394946!4d-62.6371296!16s%2Fg%2F11q86lslb7!19sChIJobiD7pzvy40R_t3lNaIo-gI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Subestación",
              "coordenada": "https://www.google.com/maps/place/Parada+Subestaci%C3%B3n/data=!4m7!3m6!1s0x8dcbef9cee83b8a1:0x2fa28a235e5ddfe!8m2!3d8.3394946!4d-62.6371296!16s%2Fg%2F11q86lslb7!19sChIJobiD7pzvy40R_t3lNaIo-gI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "PARADA TERMINAL T70 MASISA",
              "coordenada": "https://www.google.com/maps/place/PARADA+TERMINAL+T70+MASISA/data=!4m7!3m6!1s0x8dcbfb5d3b267c99:0x4b42ac2b58f781a0!8m2!3d8.3126657!4d-62.6988241!16s%2Fg%2F11tx9rvst1!19sChIJmXwmO137y40RoIH3WCusQks?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Trans Bolivar BTR",
              "coordenada": "https://www.google.com/maps/place/Parada+Trans+Bolivar+BTR/data=!4m7!3m6!1s0x8dcbf93ea80595fd:0x9996fa93c2e6317!8m2!3d8.2802095!4d-62.7617434!16s%2Fg%2F11fy22gzr7!19sChIJ_ZUFqD75y40RF2MuPKlvmQk?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Transbolivar BTR",
              "coordenada": "https://www.google.com/maps/place/Parada+Transbolivar+BTR/data=!4m7!3m6!1s0x8dcbfb074b5c5e93:0x199a9ea0637f1a59!8m2!3d8.2947693!4d-62.730283!16s%2Fg%2F11h3l052ng!19sChIJk15cSwf7y40RWRp_Y6Cemhk?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada UCAB",
              "coordenada": "https://www.google.com/maps/place/Parada+UCAB/data=!4m7!3m6!1s0x8dcbfbcbc5b2fa9b:0x9ebe8b1d9c6f8260!8m2!3d8.2964001!4d-62.7125841!16s%2Fg%2F1vd76z7g!19sChIJm_qyxcv7y40RYIJvnB2Lvp4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Parada Vista Alegre",
              "coordenada": "https://www.google.com/maps/place/Parada+Vista+Alegre/data=!4m7!3m6!1s0x8dcbf1af0c0b65e1:0xc55af3c93e9ffd4e!8m2!3d8.3373437!4d-62.6391828!16s%2Fg%2F11rrsf92cb!19sChIJ4WULDK_xy40RTv2fPsnzWsU?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni I",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+I/data=!4m7!3m6!1s0x8dcbf9629ef76425:0x7ba8181b0328b21d!8m2!3d8.2908608!4d-62.7325693!16s%2Fg%2F1ttdzh5t!19sChIJJWT3nmL5y40RHbIoAxsYqHs?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni II",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+II/data=!4m7!3m6!1s0x8dcbfbd80da9fd6b:0xfea02d742cad8492!8m2!3d8.2911634!4d-62.7317968!16s%2Fg%2F1tfk5gv0!19sChIJa_2pDdj7y40RkoStLHQtoP4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni IV",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+IV/data=!4m7!3m6!1s0x8dcbf9689c6e1a1d:0xcffa51e58728d9c4!8m2!3d8.2866115!4d-62.7444649!16s%2Fg%2F1tg9p559!19sChIJHRpunGj5y40RxNkoh-VR-s8?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni V",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+V/data=!4m7!3m6!1s0x8dcbf9289bc34f91:0xe30e3a521a73c0d9!8m2!3d8.2752089!4d-62.7754122!16s%2Fg%2F1tfb7l_k!19sChIJkU_Dmyj5y40R2cBzGlI6DuM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni VI",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+VI/data=!4m7!3m6!1s0x8dcbf9289c614ff3:0x6f02d89b25298167!8m2!3d8.2754424!4d-62.7755517!16s%2Fg%2F1tk23zsj!19sChIJ809hnCj5y40RZ4EpJZvYAm8?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni VII",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+VII/data=!4m7!3m6!1s0x8dcbf8d63be10085:0x4739a5e750cfb8e!8m2!3d8.2726926!4d-62.7805138!16s%2Fg%2F1v76_qb3!19sChIJhQDhO9b4y40RjvsMdV6acwQ?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni VIII",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+VIII/data=!4m7!3m6!1s0x8dcbf8d6384a7865:0x54fd1981e6a2a00b!8m2!3d8.2728731!4d-62.780723!16s%2Fg%2F1tfryjcy!19sChIJZXhKONb4y40RC6Ci5oEZ_VQ?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Paseo Caroni X",
              "coordenada": "https://www.google.com/maps/place/Paseo+Caroni+X/data=!4m7!3m6!1s0x8dcbff31ee07ffab:0x92224ac25ae2a143!8m2!3d8.2613426!4d-62.7922618!16s%2Fg%2F1td9rkqf!19sChIJq_8H7jH_y40RQ6HiWsJKIpI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Rio Negro",
              "coordenada": "https://www.google.com/maps/place/Rio+Negro/data=!4m7!3m6!1s0x8dcbf94e6d578465:0x276578d89b25a470!8m2!3d8.2691146!4d-62.7456558!16s%2Fg%2F1tfqb84w!19sChIJZYRXbU75y40RcKQlm9h4ZSc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Santa Rosa",
              "coordenada": "https://www.google.com/maps/place/Santa+Rosa/data=!4m7!3m6!1s0x8dcbff27fb4eacdf:0x76c6364de2ff9c31!8m2!3d8.2558109!4d-62.7801329!16s%2Fg%2F1ptxz3khr!19sChIJ36xO-yf_y40RMZz_4k02xnY?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Santo Tome",
              "coordenada": "https://www.google.com/maps/place/Santo+Tome/data=!4m7!3m6!1s0x8dcbfbc4ee9c6511:0x8f78a11016b3ce5e!8m2!3d8.2878961!4d-62.7186888!16s%2Fg%2F1vzn6m1c!19sChIJEWWc7sT7y40RXs6zFhCheI8?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Santo Tome IV II",
              "coordenada": "https://www.google.com/maps/place/Santo+Tome+IV+II/data=!4m7!3m6!1s0x8dcbf97c90d9df51:0x9541868a59619b6!8m2!3d8.2943245!4d-62.7374375!16s%2Fg%2F1tgljb_z!19sChIJUd_ZkHz5y40RthmWpWgYVAk?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Sierra Parima I",
              "coordenada": "https://www.google.com/maps/place/Sierra+Parima+I/data=!4m7!3m6!1s0x8dcbff3f64b125c9:0x72b6d43d44ae5f36!8m2!3d8.2509957!4d-62.8024811!16s%2Fg%2F1tgf47rz!19sChIJySWxZD__y40RNl-uRD3UtnI?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Terminal Privado de Rodovias",
              "coordenada": "https://www.google.com/maps/place/Terminal+Privado+de+Rodovias/data=!4m7!3m6!1s0x8dcbf968b434858d:0xafd7ed2eff5af397!8m2!3d8.2881771!4d-62.745432!16s%2Fg%2F1v_sp8d9!19sChIJjYU0tGj5y40Rl_Na_y7t168?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Toro Muerto I",
              "coordenada": "https://www.google.com/maps/place/Toro+Muerto+I/data=!4m7!3m6!1s0x8dcbfbe599e9d549:0x88472c12c286ab87!8m2!3d8.2748107!4d-62.7217948!16s%2Fg%2F1xfspsht!19sChIJSdXpmeX7y40Rh6uGwhIsR4g?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Unare I",
              "coordenada": "https://www.google.com/maps/place/Unare+I/data=!4m7!3m6!1s0x8dcbf9417e9c4c67:0x26b2f7eceacc0867!8m2!3d8.2808942!4d-62.7506285!16s%2Fg%2F1th64dwp!19sChIJZ0ycfkH5y40RZwjM6uz3siY?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Unare I",
              "coordenada": "https://www.google.com/maps/place/Unare+I/data=!4m7!3m6!1s0x8dcbf96b1edf868d:0x6e9811ed84447c88!8m2!3d8.2867415!4d-62.7542496!16s%2Fg%2F1v3lq_md!19sChIJjYbfHmv5y40RiHxEhO0RmG4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Unare III",
              "coordenada": "https://www.google.com/maps/place/Unare+III/data=!4m7!3m6!1s0x8dcbf9232ea0060f:0x235d079e5078b4d0!8m2!3d8.2822108!4d-62.7680469!16s%2Fg%2F1td61s8y!19sChIJDwagLiP5y40R0LR4UJ4HXSM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "UNEG",
              "coordenada": "https://www.google.com/maps/place/UNEG/data=!4m7!3m6!1s0x8dcbf9574b894b25:0x335f3889fed32b59!8m2!3d8.2719441!4d-62.7380061!16s%2Fg%2F1tjdh7bn!19sChIJJUuJS1f5y40RWSvT_ok4XzM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Africana",
              "coordenada": "https://www.google.com/maps/place/Villa+Africana/data=!4m7!3m6!1s0x8dcbfbdcd76f9f03:0xe1a0c27df9818776!8m2!3d8.2842758!4d-62.7213013!16s%2Fg%2F1tfbzhtf!19sChIJA59v19z7y40RdoeB-X3CoOE?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía I",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+I/data=!4m7!3m6!1s0x8dcbff23d4e5d0b5:0xa0938f0cfd44957!8m2!3d8.249265!4d-62.7855617!16s%2Fg%2F1tk9rtg3!19sChIJtdDl1CP_y40RV0nUz_A4CQo?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía II",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+II/data=!4m7!3m6!1s0x8dcbff222abecc1b:0x5b8db3233b2450f9!8m2!3d8.2490686!4d-62.7853793!16s%2Fg%2F1tj4zrk2!19sChIJG8y-KiL_y40R-VAkOyOzjVs?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía III",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+III/data=!4m7!3m6!1s0x8dcbff1826097667:0x38bec5d0a1555063!8m2!3d8.2452621!4d-62.7908349!16s%2Fg%2F1th1w2s7!19sChIJZ3YJJhj_y40RY1BVodDFvjg?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía IV",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+IV/data=!4m7!3m6!1s0x8dcbff182f25466b:0xeb4cacf7b7517769!8m2!3d8.2450657!4d-62.7907652!16s%2Fg%2F1tdkyqwd!19sChIJa0YlLxj_y40RaXdRt_esTOs?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía V",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+V/data=!4m7!3m6!1s0x8dcbff170adffdd5:0x47034613744c4772!8m2!3d8.244556!4d-62.7927446!16s%2Fg%2F1tc_541m!19sChIJ1f3fChf_y40RckdMdBNGA0c?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía VI",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+VI/data=!4m7!3m6!1s0x8dcbff170cb4bd49:0xe14e3e06431d9705!8m2!3d8.244333!4d-62.7926588!16s%2Fg%2F1tfv1lqh!19sChIJSb20DBf_y40RBZcdQwY-TuE?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía VII",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+VII/data=!4m7!3m6!1s0x8dcbff16e7ba96f1:0xe972fa09f2d8e660!8m2!3d8.2437597!4d-62.7947402!16s%2Fg%2F1td77mfc!19sChIJ8Za65xb_y40RYObY8gn6cuk?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bahía VIII",
              "coordenada": "https://www.google.com/maps/place/Villa+Bah%C3%ADa+VIII/data=!4m7!3m6!1s0x8dcbff16dd7383d7:0x5ea2f382be2884d6!8m2!3d8.2435155!4d-62.7946866!16s%2Fg%2F1tfj469v!19sChIJ14Nz3Rb_y40R1oQovoLzol4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Betania I",
              "coordenada": "https://www.google.com/maps/place/Villa+Betania+I/data=!4m7!3m6!1s0x8dcbff687e159593:0xfb801f9ab2180ea7!8m2!3d8.2463876!4d-62.8144598!16s%2Fg%2F1tfzncsv!19sChIJk5UVfmj_y40Rpw4YspofgPs?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Betania II",
              "coordenada": "https://www.google.com/maps/place/Villa+Betania+II/data=!4m7!3m6!1s0x8dcbff43d718007f:0x9e2a0da76fa5c279!8m2!3d8.2513621!4d-62.8091007!16s%2Fg%2F1w04l4bn!19sChIJfwAY10P_y40RecKlb6cNKp4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Bolivia I",
              "coordenada": "https://www.google.com/maps/place/Villa+Bolivia+I/data=!4m7!3m6!1s0x8dcbfa30ca6fe90d:0x7a4f385514ebc940!8m2!3d8.3095936!4d-62.7150115!16s%2Fg%2F1tl1ph71!19sChIJDelvyjD6y40RQMnrFFU4T3o?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Brasil I",
              "coordenada": "https://www.google.com/maps/place/Villa+Brasil+I/data=!4m7!3m6!1s0x8dcbfa25cef9dabb:0x975168704c0fae15!8m2!3d8.31371!4d-62.7255768!16s%2Fg%2F1vlqr7nw!19sChIJu9r5ziX6y40RFa4PTHBoUZc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Brasil II",
              "coordenada": "https://www.google.com/maps/place/Villa+Brasil+II/data=!4m7!3m6!1s0x8dcbfa25c5f84737:0x89438eafe91fae7b!8m2!3d8.3135083!4d-62.7254212!16s%2Fg%2F1w666g9r!19sChIJN0f4xSX6y40Re64f6a-OQ4k?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Brasil III",
              "coordenada": "https://www.google.com/maps/place/Villa+Brasil+III/data=!4m7!3m6!1s0x8dcbfa2f575aec41:0x28134f8f4bfaec07!8m2!3d8.3114063!4d-62.7258343!16s%2Fg%2F1tfsp0sh!19sChIJQexaVy_6y40RB-z6S49PEyg?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Brasil IV",
              "coordenada": "https://www.google.com/maps/place/Villa+Brasil+IV/data=!4m7!3m6!1s0x8dcbfa25e4b7b5a5:0x372fb5b9316c32d2!8m2!3d8.3123352!4d-62.7260917!16s%2Fg%2F1tqtyxyw!19sChIJpbW35CX6y40R0jJsMbm1Lzc?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Central I",
              "coordenada": "https://www.google.com/maps/place/Villa+Central+I/data=!4m7!3m6!1s0x8dcbfa30b541bdf1:0x830b2bf3c93bf66e!8m2!3d8.3096944!4d-62.7148131!16s%2Fg%2F1tf6c2g1!19sChIJ8b1BtTD6y40RbvY7yfMrC4M?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Colombia I",
              "coordenada": "https://www.google.com/maps/place/Villa+Colombia+I/data=!4m7!3m6!1s0x8dcbfa3703d6a9c3:0xb3aad1251556d566!8m2!3d8.3083567!4d-62.7129945!16s%2Fg%2F1tf0rnrp!19sChIJw6nWAzf6y40RZtVWFSXRqrM?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Colombia II",
              "coordenada": "https://www.google.com/maps/place/Villa+Colombia+II/data=!4m7!3m6!1s0x8dcbfa371eb7a191:0x7fccfbb79613a5f7!8m2!3d8.3085558!4d-62.7129972!16s%2Fg%2F1tkb64c2!19sChIJkaG3Hjf6y40R96UTlrf7zH8?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Villa Latina",
              "coordenada": "https://www.google.com/maps/place/Villa+Latina/data=!4m7!3m6!1s0x8dcbfbc5c2474c49:0xbc8e74cfd3bc6a13!8m2!3d8.28977!4d-62.7157599!16s%2Fg%2F1tftm7pw!19sChIJSUxHwsX7y40RE2q80890jrw?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Yarayara",
              "coordenada": "https://www.google.com/maps/place/Yarayara/data=!4m7!3m6!1s0x8dcbfed7dc82b281:0xdef64f0449691b47!8m2!3d8.2576743!4d-62.7787274!16s%2Fg%2F1td4flq3!19sChIJgbKC3Nf-y40RRxtpSQRP9t4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            },
            {
              "name_ref": "Zabaleta",
              "coordenada": "https://www.google.com/maps/place/Zabaleta/data=!4m7!3m6!1s0x8dcbfa3972361895:0xaefd8fdc4468e5d3!8m2!3d8.3137525!4d-62.7135551!16s%2Fg%2F1tfcpcw0!19sChIJlRg2cjn6y40R0-VoRNyP_a4?authuser=0&hl=es-419&rclk=1",
              "img_ref": "none"
            }
           ]
    }';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $centers = json_decode($this->CENTER_OPS_JSON)->center_cps;

        foreach ($centers as $center){
            DB::table('center_cps')->insert([
                'name_ref'=>$center->name_ref,
                'coordenada'=>$center->coordenada,
                'img_ref'=>$center->img_ref,
            ]);
        }
    }
}
