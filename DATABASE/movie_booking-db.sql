-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 09:19 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_image` text DEFAULT NULL,
  `ad_name` varchar(50) DEFAULT NULL,
  `ad_about` text DEFAULT NULL,
  `ad_company` varchar(100) DEFAULT NULL,
  `ad_country` varchar(50) DEFAULT NULL,
  `ad_address` varchar(50) DEFAULT NULL,
  `ad_phone_no` bigint(11) DEFAULT NULL,
  `ad_email` varchar(50) DEFAULT NULL,
  `ad_uname` varchar(50) DEFAULT NULL,
  `ad_pwd` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_image`, `ad_name`, `ad_about`, `ad_company`, `ad_country`, `ad_address`, `ad_phone_no`, `ad_email`, `ad_uname`, `ad_pwd`) VALUES
(1, 'admin.jfif', 'M. Ismail', 'My passion for cinema empowered me to be able to create anything I wanted and share it with an audience.', 'SK & Co.', 'Pakistan', 'North Nazimabad, Karachi', 9234459807654, 'ismailskking14@gmail.com', 'Ismail', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ads_id` int(11) NOT NULL,
  `ads_trailer` varchar(50) DEFAULT NULL,
  `ads_image` text DEFAULT NULL,
  `ads_descriptions` varchar(50) DEFAULT NULL,
  `ads_date` date DEFAULT NULL,
  `ads_image_blobing` mediumblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ads_id`, `ads_trailer`, `ads_image`, `ads_descriptions`, `ads_date`, `ads_image_blobing`) VALUES
(6, 'Food Panda', 'images.jfif', 'https://www.youtube.com/watch?v=Bxn46IYZSCQ', '2022-11-19', 0xffd8ffe000104a46494600010100000100010000ffdb008400090607080706090807080a0a090b0d160f0d0c0c0d1b14151016201d2222201d1f1f2428342c242631271f1f2d3d2d3135373a3a3a232b3f443f384334393a37010a0a0a0d0c0d1a0f0f1a37251f253737373737373737373737373737373737373737373737373737373737373737373737373737373737373737373737373737ffc0001108008200e803011100021101031101ffc4001b00010001050100000000000000000000000006010304050702ffc40047100001030204030405060b070501000000010002030411050612211331412251617107143281911623a1b1c1d1152433425255627293b2f0353653737482e134434564d326ffc4001b01010002030101000000000000000000000001020304050607ffc40039110002010204030309080203010000000000010203110412213105415113617122328191a1b1c1d1f006141523334282e152c22453f134ffda000c03010002110311003f0085add3e92100401004010040100401004010040100401004010040100401004010040100401004010040100401004010154050d873361e2a2e43691eb494ba2bda43aa1a4a5d751da43afb8694baea3b4875f70d252eba8ed21d7da8694ba19e3d4a592e5b99452484010040100401004010040100401004010040100401004010150841d1bd1b648c3f11a138be2d4b1d73e494b638e6790c8583b9b6dc9f15ab36ee787e258aa95f112bbd13697a09e0c8d954ff00e0687f84150e78f90b957f50d0ff0008201f2172afea1a1fe10403e42654fd4141fc2080c4adc8d979d1c8c872d61b20d3b6a718ee6c76b8048e9ba05a1c7f35e0232e6393e1f139c69f432585ae76a31875eecbf5b11b1ee5b149dcf57c0b1352ac254e6ef96d6f4dfe469d653bc100401004010040100401004010040100401004010040550040003740770f45969327d2c9723e76475879ad396ecf9e621fe74fc5fbc96baa61601ae468bf2ba83096dd1b2a4f1639e402d6f9b7d8202a69ae07e3130f27a129d9864f0c2c0d7cf7f17bb740f73ddd95111d0f05a76b84213b1c53d2b8d39b0b39da9a317f8acf48f49f679eb57f8ffb10c598f4a1015420a86b89b06924f40145d22762963dca40401004055ac73cd98d2e3dc05d43696e43696aca58f7292421010928845c2121004010040540ba032bd42a0c0d9dacd51917bb77fa946682de493e8f434963e93a9d9d9f8eebd9732707c1abb14739d49492cf145f94318bf90f355ed69c64bb47a15c7627b1a4d45a537b5f6b9ef1ac12b30b11495149341149b34c80dae2f70acea5194df64ee8c7c37153ad4ed55c5cd7f8ded63abfa2c3ab2742f6b8b4711e40eedd6a4b73c757d6ac9aeafde4b3b63fee10a0c45b2f98b2a2ced1a0761ef26c76e67fe1018ce8ab1e438d441cfa48f6edee2a495232d94ac2d04cd31efd333b9fc509cefe92f91ebd51bfe2cffc577de97199fd5be4715f4a6c11e6d7b439c7f1766ee75fbd66a3ccf45f679ddd4fe3f12205663d294406cb2fc147578bd3d2e20f7360a8718cbc1b6873859a7caf654968ae8d6c5cea53a329d3dd6a4eb0ec0b03c2715a1a98eab89289853e93283a65687f11c7f66d6b79ac599b385571788af4a7171d2cdedcb4b7a4b14596303afa98ea03a56d2cd046f747c705f1b9cf702761cb6bef6b229cad62f531f89a5170e69db6e5634f9aa870fa5c170a9282986a699229aa1b203adcd7104116bdcdaf7eed95a2db66e606b559d6a8aa4ba34b5e667c796b0174d40ef58978788932d3b38a01d0d8ae5a491604c9d9b9ee5199981e371494fc9d61a3d39b7bfa8bd1651c267a9e146f91928753ba6a7754b09818fbeb05dc89161cbbd467958a3e235e31bbdbca49db7e860654968f0e9331125e0c5039b0c8d90021baedb6dced6fa7bd4caeec67c746a55546dcdeaaddc6c5d94f02654d2b1d24cd89d239a1feb2c77ad3042f7eb6dbd9ed35a37ef519e5b1aff896272cac95fc1f93aa567d7431e9b2f60b5b82495f470d41fc5a69afeb4df9a737d98dcde67bee999a766649e37134ab64935ba5b3d575b99d065dcbd4388503e506489d50c8a332d431ccab6b9b7d7603b201e854669330cf1b8ba90928e8d2e49de3aeddf72198f61935054ba434aea6a79a49040d748d71b34d8f2f1beeb3425747630988556295eed6fe9350ae6e040542820cda7c2310a811ba1a29ded91a5cc2d67368e67e90aae693b330cf134a17cd231a68258247473c6f89ed36735edb169f10792b5f99914d49664f436f97b06755bdd55511bfd561dceded9eef25ad89ace9c74dcd7ad888a7913d4b93e1f1d7ccf8e929a72c6bae440090deb636fabc56ad0e338d49c775de8d2a9c33034daa936a2f7df72579371aa7cab859a4c561a832d454b9d07062d45e34b45adcefd93fd054ab5635a6b2ef638dc6ab4275d38bbe962f664afc5b3161b5542300928d9d9740faa905e47027d9001fbd4d379657473f0d88ab4aa29d3b5fd66f3d1735edc931b5a43650f7b413fa57b7d6b61dda30cbcf79bd86f7818af6bf1a8b7bd888f91e9f7fbd60c95b948cae547fc4c97b6b4d2cc227426a044447706daedb5fc2eb3c737ee31c7b3ccafb11f6c79d4b46afc1faec2fcad7eb6d965fcb37dfdc2fccf6d6673111df0f0fe28b01fe1dbcb9dedee4f208ff00819b9daded3230d19b3d7e9ff083a8fd56e78da3736b6d650f25b42957ee7d9bc97cdc8e65e963fbe4ff00f4ed57a2753ecf79f53c17c487959cf4e51017a929a6aba98e9e9a27cb348ed2c8d82e5c555bb14a938d38b9c9d9237d5b93f12a7751431412cd553c065962d20707b5a7737b772a29ae66853e254659dc9a493b27bdf4e87b8f29d43f0e8a76c927acbe379f56e16e1cd9447a49bedbf7a8cfa957c462aa38db4d35f157bf79ae8301c5e77c6d82866739ce786f202ec36775e8480ad9a26ccb1741277974f6ec66e2386e65c54b2aeb28e7934114ecb31ad0d21c4690d16fce3dde2a138a30d1af83a178c1dafaf8fd22cd1655c5eab1214468a76b9ba0cae001d0c71b6abdec473e5ceca7346c5aa710a11a7da2927bdbd1e8316a308a96621885352b1d3b28a5731ef680360fd20dbc4d94e656bb32c7130ece139bb6657f65ccca6caf89c8eaa64f04b03a9d8fe6cd5a9edd2746c76d9c37e5baab9a30cf88508e5b3ba76f575242701cd74b8355e190cee7f05ed8853c11b3e723782e275eceb5f6b2a5d5cd058bc14ebc6ac96f77777d1ad36d51017120d8dc78772cf63bcbb8f524d248c63247b9cd60b3039c4868e761ddcd2c910a114ee916d4962a805ecdb0d3addb3751d95272b235b135fb18a7d4dd4198719abaaa1a5a2746266375ba4e092c76c1b7e5bb403dd75a328abdd9c095f359e8dea4f30f8a0a296cd0d96a1efbcd50f634970e8d6df937a5b7d8ad6a9566f6342a579cdd9bd17246ca2c629a78f45346f2433dae4010792cd877393b35a1a188846d7e65ec661920c2b58ab8a0a831f69cf781a4ff005b2d86638ab23598197ce23adc4445c585da6396270797b797317b8f2fb53b17377b19a14ea4b44bebd260e67c5d82410e18d80ca4ddfaae64db90d22e7e36e8ab5a94b6677386e067773aab4e5d3d7b121f462646e508c3c378c25787071b0d57dfc94dada1c1a8ad36bbc96b4dc76dad07ad9d7fb10a1489eedcb9918f2793f6202e093717d207ef203d6a67e9040575b7f4820387fa57df383cff00ebb3eb2b3d13d1fd9e5e5557e1f121c5663d314406760d894b84e2705742c63df113d87f27020820fb8aab5756306228aaf4dd37cc90d2e789693871d2e1b4f1d23211088048e3b0797020f3bdcac7d99cf9f0a8d44dca6dc9bbdecba5b631ea338d6cd492c0f863d5246f6f1439da86a93897f3053b345e3c32929a9df6b69e0ac657cbaaf3883ab1f470705f1701d10b8693ab5920f4249b94ecd18ff09a593b3cdaa77be9e1ea311d9c6b8d6d156706233524b34ad2eb9d7c4bea077ee2427668c8b8652c9286b6925ec2fc99da59a779a8a0827a72e89d1c0f91c046e8c92d3aaf73ccedc943a7a58aae151514a33b3d75b6f735f86e64a8c3f1ea9c5e38a27baa5ef7490bc9d2759d56f71e4aee29a362b6061570ea8b76b7332aa7395754c263a88a2713432523dfbddfaf4de43fb56685574d1861c32941dd3fdc9fab9781764ce9319b8ecc3a9d923aa21a89487bbb6f8c586dd2e2df04eccaae1715171737b34bc1bbfa48c554a67a99667000c8f2f20779375952b1d484724547a169496080202e4100aa9594c6d699ed66e2e3722cab249ad4c35d45c1b9aba5a9bb8f2b62783d639d0d7f0f4121a23683b5c5f726fbd82b7dd54b76722386a7575bd97bbd2f5298c62f9aa29053d1c8384180ba57c51125c493b120dbc85963ab87d528abfa8e7e2784d4956ff8cae9eedb5b9a4967cd1527f18c5a41616da4b6d7fd90a151a96b6c563f677172777957a6ff0003127c2269497d6e22f9093724ea71dfcca89515157948db8fd9aa96f2ea25e0be66e62c4eb9b8753e1b4f33e3a5a76686341b6d7b9fa6e8aaca4b2c11ddc360a9535e4c6ed5b5f0ee36b945eca7aa9aee0277b0682478ee3ea58abd392895e274e4e92b6ab99d43d1b9ff00f36f2ee7eb529e5fb45516c8f033f39f89229ab6081c1b3cd146e3c839c012ac937b231b9456ecf4d95ee6ca406b037d87bb70e16e6a0b7796a1927d438f352b99d74348276f3406635cc76e083e280af67b820387fa57fef7cbfe4b3ed59e91e8fecf6f57f8ff00b10d598f4c101b8cad450e218d474d551f1a231caee1f1345cb58481aba6e06ea937646963aaca951728bb6abde4ab0fc03099ea2235744ca77ba36f1e8c5497706ef203c1d4398173726ddc6eb16676397571b888a6a12bae4ec95fbb6f76e637e08cbe6a62a192310e9a58ea24ac15049278ad639a4136f64dfbf644dee64589c5e5ed13bbbb56b775d3ea66c585d2c9414f4b5586c34a1b513cbeac2a8c9c4ec30075f55f7eed42f6ba8d998255ea466e709b775157cb6b6fa6df066e70ca17e1b41531605474d3c6d967935cb0f18b8b4334b2f7eb723af250ddf7356b565566a55e4d3b2e76eba9b074d88c324313b08a67bbd64b1ef6d190d7c7c468b8b5ec749277eef728d0d751a4eef3bdbaf3b367965256d40c06aabe8e958f7cc7d6238e84f6039b6008b9b75dcf2bf86e25d4a7175634e4ec96977f5ea38ee26d6c788d5c6c686b5b3bc003901a8ecb621aa3d7d06dd38b7d1188ae6608020080aa03230f36afa67741330fd214331d657a72f03a5e255b4113e4ed97c9bfb2d2775b49e8722853ab2b742f61796e3c61c629299cda730b5f256090b5dadc2e1ac1c8802d7bad49d795f430e2388cf0de54657776b2db92ebcfc09353e48cbd0c223387b25ef74ae249fa5609559be672aa718c6ce57cf6f035f8be51f52a3924cabc1a4aaddce6be26bf8a2dec02e0481e1c8f555726f73350e28aad44b1be547c6d6efd37397e678e9e0c6eaa3a56471b5a46a8e3166b5f61a9adf00ebacb093513d7f0f737868b9bf0bef6e46b69e39a79991c20ba471b35a39a395f566d4e71841ca5b1d93d1c324f928e6075a4e3ca013bd8ea3f1580f995669d5938ed77ef3455797f15356ee2e17eb4f24fcffac1b385c917e5cae06fdca94e862231ff00ea71f45f5b5b9b76bf4346a46ef5a77efb92ec130caec3b049606cb1fadb98e31b7731c67f346f7b8568acaece4e5def7e46cd2514d675a18229b3ae917a8c3ef617ed75ebf98b2de074dcf01d1fd7a4a325cc4ca795b3d7530aa6c86cd8d80b7481c89b73bf5b2c79e17b13930ae49c62ec5ec23e53c95b4efacaaa2752024ccd61bbad6e9d916dd5db8db431d7fba283514f372fab9cdfd2bff7be5ff259f6ac948e9fd9edeaff001ff621ab31e98202fd2d54b492f169dfa24d2e6136bece0411f025434994a94e3515a459b8ea2e962c56e3bb64b0b0040e896091b0c3f1dc570d89d150621534f139da8b2390817efb2ab8266bd4c251aaf3548a6fc0c9f95b987f5cd6ff0014a767131fe1d85ffad0766dcc2e041c66b6c45bf2c54767127f0fc2efd9a34cf717925c4924dc93d55cdb4ada23ca9242008020080b94fb4f19ee70fad432b2d9933aac428087e832bdd63cd9f6ad872563569d0ab7d4dfe68c7aa32c4384609446689bc06cb512476e21049166920806e0f4ee5cd7abb9c8c0e1218e9d5c4d4d75b2bede9e64c70318abf2c45ebefb624f85c753ff00349274eab75b5aea0e262beeeb14fb25e45fff004e6f85669c630dcd50d2d4bea349999054d3cf217f68901ce1b6dbdc8b6ca74dcf515f87e1abe0dce295ecda6b4f05f02c7a52a28e8b366a8da1adaa85b338f406e5a7f96ea5332702aee783b3d72bb7a3433e885060d464c10b5d3399bcc4768edfd6cb52a547276668e32b54af279de8b9128f45f2b9f93e290692f9257bacf36b925675b1e627e7325ad3b0d61a0f5dcfdca4a58a44e78b9708c7eeb8a125c0fdc5c0b7bd0119c71c69aa5ce703c271d41c3a77858269ad4e861e4a51dcb34b8886bb5c7276ba954ced169d34d5991fce397198ebe4c4a0964f5ed00066da1f6e9e07c6eb352aee2f536f87578e12a35ca56bfd7a4e5f234b1c58e696b9bb3811620ae823d5a77d4f0a49080200802008020080200802008020080f51fb43cc210f6377555709649a1ce7b8823716e6b24daca5e9d39269b3af9c1f0bcd506138ccda8c9135af6969b0775d2eef17bfd2b9f73c347155f02eae1e3b3bafefd479c4d94e339e1cc7bb1412c8c2e1c27b853f6413da1eefa947314252fb8ced96ddebcaf4195559570da9cc31e35335e6a1805997ec970e4e23bc29290e255a1867878bf25fafc0e69e95aba2a9cd1c363ae29a9db11b7e95cb8ff305316ac7a8fb3f4dd3c1ddf36dfb97c0d161d3d756b994714e4b4349ed3410d68e6770a24a9daecdcc5d2c2422ead48ebef3ac7a326f0f2b696f26cf201e41ca0f9fd46b3bb2b6a4a788e06c6c0f72143c6b99cd9c12d601f937dafefb5fbfc901603eab476ab60d5b6fc123ed405aaca0a8af838735453961dee213f7a86ae8b424e2ee88de29815550b75d39d4ce571d3cd6bce9b5a9bd4f10a5a33d5138b9a6fe03fe56245a4403d20e15eab88b6be16da2aaf6edd1e39fc46ff15d1c34f32cbd0f43c2f119e9e47baf71135b4758201628059080375048b20162802028a4040100401004055bcc20327536db9e6a1ce36b336d5ac4c721e756e000d157eb9285efd4d73773093cec3bbadbcd6acac70b8bf0958bfcda5e7af6ff006750a6ccb81d544248b14a32d23f3a50d3f03baadcf253c062632cb2a6c8f668f485414303e1c1e46d5d5b8583dbbc719ef27a9f052b53a980e075ab4d4ab2cb1f69c82a247cf33e59de6495ee2e739c6e49eaaf647b5842318a8c5688e818043876118637533893c8d0e95f6bdfa803c05d69d595dd8f29c42ad4c45569e896c8937a34226ca25c0fe52691c0dedccdc7d6b616c8f312f399bd147201a78a4f2ed6a373bdd082e0a6a914f54d82a2d3c8c3c27b89218eb581b2945a0e2a49c968685b846720d6df1ca7240009b0dfbcfb0af78743a4ebe039537f5e93dfe09cdfc023f0e41c4e28703a47b1a482dbe8efb1e49787423b7c0e6fd376b7b6fe222c2b3336463f10c5a19a95bab8b1b5a2ef16dadd816dfc556595c5a48aceb6132bc9069f2fab98d00d123dbd2eb46d6645f431b31616dc5b0a9a909b4846a89ddce1cbeef7abd39649266c612bba3554d1c7a589f14af8e4696bd874b9a7982365d54efa9ebe3252575b1b2cb3471d7e394d4d2c7c56bf59e10363210d24341e84916559bb235f1b51d3a0e49dbbfa6a4bb38e0387d36052d552612ca2742d8c3a41339df385c03a3b1039020eaebbac5193b9c7c062eaceba84e77bdf972b68cd2d5e5981cda5f53ad8c19a06680f6bc99a4e1091dd2cd1622caf9eda1b74f1f24e5da2d9f768af6f81664caae8d93c8fc460e0d2bdd1d4bf84f2627b6db016ed7b4371b7d09da191710cd68a83bbd56df3d0cbc47285ab9f150d5b353817c50b98f2ed0d7e82755ad7bef6e6a1543151e24f227523e9d37b5cb33e4e9a2200af81ce901e000d77ce59ba8efc9bb5d4f685e3c4e2eef2befee2f4794629a3653c35d19a86d4cb0cf2e870631cdd034ef6fce71dfaa8ed0a3e24e2dc9c746969a5f5bebfd115a981f4d3cb0c96d71bcb1d6e5706cb2a77573ad0929c549732d292c10040100405475b28643bdb431f5570ff0001df10b03a53e4cd3ed38847fc1fad7cca096b01ed5330feec8a8e94c858bc6af3a927e12f9a2a2a671ed51c96f000855ecea742df7faffba84bd9f32a2b87b2e827f7b0a879d722cb89d3fdd092fe2cf62b61bf69ce6f9b485177cd17fc530dce56f14d7bd1b9c2311abc40370fa095b3d85836d7d03c4f40aad45ee6bd4a9c3aab73734df8fc0eb5e8cda61ca4d8a22cda79002e048d9de0b21e1ea5b3cb2ed7d096b5c6c03b45fad9a50a9e6273da0f10c7abf65a6c80b82537dcb6de4501eb8adefbfb90143231d71befb202212911d4cc0720f2078eeb4e5b9d1879a8b85e08beca08b1cd3d2050b20c5595510b0a96dddfbc36fb96fe16778dba1e8f84d572a4e0f911ea08a49aae3642fd120bb9ae06c4102fb78ecb65ec746b4a3183725746e7139b3062b1b462b56f9618839ede248db0b026fb73e477544a28d3a31c25093ec959bee659820c6c35d189e68a29a36b5e38f60e65ac2e2fcb6b7baca742d2a987ded76bbb9863b1e3c19d95951aa28ad138557698c3d06fb72fa14792c4bee9aa7156f0fe8cb8fe5057cb4f863ea64606378a5c67362389ab5b8dfb475385baf2f34f25189ac2524eae55ae9b776cb4e87baac1b32c8c64b3cf3cb31710e8dd517732fb5ee4db7047c53c9d8ad3c560a2dc5249787f45461f9b388c2faba9618c682e35a3e6c1ff0076decfd08dc43ad80b79a9effb7fa2395b1be1aca88a576b7b24735ceef20ee55e3b1d2a525282695958c7563204010040100405500b9402e8020077e7bf9a07aee4cb2b6294f4d843a088c315402e2f1ec9937d8efe06dee5a3888cb369b1c3c761e5da664b464f7d15ea6e4f8f56efe23b579dd4f23ca4fce66ef11cc387e1b51c0aca8e1bc3439dd8710d048682e20586e51e8aec9a34e55aa7674d5d99dc591cd9cddad6b4031bc006e2dcd0a1e29df3b2426a6a617b08d9ad8c8fa6e80cc8dcd7b41690477a02cd754369a96494f41b79a893b1315795885d448e792f3b1256a4b567423a230e4aa7b7604aa17dc8c678264c3e9a53cc4c5bf107ee5b7837ab3adc25fe6c97710b048370483e0ba277b72e19e637bcb21bdefda3bdf9a8b223247a0134a0dc4b203cafa8a5911923b58a09646fb32385c5b63d12c89cb1e87a6cf33482d96405b7b10e3b5c5bea51644648f406a673ce690ffbca6543243a15157501c5c2794389b93acdff00adca6543b387445a249dc9254964ac79524840100401004010040100401015500e89e8df3ce1d8650cd83e3729a57090be9e72d25b2b4ef6d86ce1ddd7a2d69ab33c3711c254c3d795d68db6bc1ebec36b8ce39972a2b679a3c55e1b50d0c980a57bf9374ea8ceda1d62012013d90a924e4ac6be1ab46849cad77a73d34eab9f81bb9337e5ff00507c34b8cc50ca612c8dee8ddd836d89eca948c519473e696a88e371eabd8fcb5a63b0bfcc9ffe4af9a1d0e87de702f6a5ed7f33d8c7ea782e69ce94bc4e2820f04eccd2416fe4fbec6f6519a1d076f83cdfa5a5bdbeb32a82b6aab81326371e230b0ee18cb06bbc7b0d58ab4a2d59073a125f950b7d78976736056b14302421dc82c6cba3419d3fb1e1ff0050dfe57adac1f9ccea709fd77e1f2212ba47a20802008020080200802008020080200802008020080203d0400771e4a2c0a587725911642c3b92c2c4ce131e2381d2c85a1ce8d9c37f9b760b9d5938ccf338da592b497266352d037587ba31a9c7b961cccd2ecd13ba28d90e1d086340ecdcd93c4c52d198d50fe614b20c569e8b1b2e8d5e698b8b82cf6173196b87c7eebacd8676a88e870d965c42ef200baa7a70802008020080200802008020080200802008020080202a8020080210c95654feceac1d38adfa96962fce471b89f9d1f0370d1f3adf35a672e449a3ff00a28ff7549a93f38d7547352c82c339958997463e31fd915dfe4957a3fa88d9c27ebc3c51cdd764f5c51004010040100401004010040101ffd9);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_useridfk` int(11) NOT NULL,
  `b_movieid` int(11) NOT NULL,
  `b_theateridfk` int(11) NOT NULL,
  `b_time` int(11) NOT NULL,
  `b_day` int(11) NOT NULL,
  `b_ticket` int(11) NOT NULL,
  `b_nofticket` int(11) NOT NULL,
  `b_total` int(11) NOT NULL,
  `b_ageidfk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_useridfk`, `b_movieid`, `b_theateridfk`, `b_time`, `b_day`, `b_ticket`, `b_nofticket`, `b_total`, `b_ageidfk`) VALUES
(1, 1, 10, 1, 1, 1, 2, 5, 3750, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `uc_id` int(11) NOT NULL,
  `uc_name` varchar(50) DEFAULT NULL,
  `uc_email` varchar(50) DEFAULT NULL,
  `uc_phone_number` bigint(50) DEFAULT NULL,
  `uc_user_massage` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uc_id`, `uc_name`, `uc_email`, `uc_phone_number`, `uc_user_massage`) VALUES
(1, 'Sharim', 'sharim@gmail.com', 9234876589, 'Amazing website, everything is so easy to access and user -friendly.');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `day_id` int(11) NOT NULL,
  `day_value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`day_id`, `day_value`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(50) DEFAULT NULL,
  `m_description` text NOT NULL,
  `m_trailer` varchar(50) DEFAULT NULL,
  `m_type` varchar(50) DEFAULT NULL,
  `m_writer` varchar(50) DEFAULT NULL,
  `m_director` varchar(50) DEFAULT NULL,
  `m_release_date` date DEFAULT NULL,
  `m_language` varchar(50) DEFAULT NULL,
  `m_image` text DEFAULT NULL,
  `m_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_name`, `m_description`, `m_trailer`, `m_type`, `m_writer`, `m_director`, `m_release_date`, `m_language`, `m_image`, `m_created`) VALUES
(10, 'Black Panther', ' Black Panther: Wakanda Forever is a 2022 American superhero film based on the Marvel Comics character Black Panther. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures it is the sequel to Black Panther (2018) and the 30th film in the Marvel Cinematic Universe (MCU). Directed by Ryan Coogler, who co-wrote the screenplay with Joe Robert Cole. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Joe Robert Cole', 'Ryan Coogler', '2022-10-26', 'English', 'avengers.jpg', '2022-11-28 14:17:05'),
(11, 'Wakanda Forever', ' Wakanda (born January 2, 1970) and Stephen McFeely (born February 24, 1970) are American screenwriters and producers. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Michael Waldron', 'Sam Raimi', '2022-05-02', 'English', 'wakanda.jfif', '2022-11-28 14:14:01'),
(12, 'No Time To Die', ' No Time to Die is a 2021 spy film and the twenty-fifth in the James Bond series produced by Eon Productions, starring Daniel Craig in his fifth and final portrayal of fictional British MI6 agent James Bond. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Neal Purvis', 'Cary Joji Fukunaga', '2021-09-28', 'English', 'no.jpg', '2022-11-28 14:14:41'),
(13, 'RRR[a]', ' RRR[a] is a 2022 Indian Telugu-language epic action drama film directed by S. S. Rajamouli, who co-wrote the film with V. Vijayendra Prasad.  ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'D. V. V. Danayya', 'S. S. Rajamouli', '2022-03-25', 'Hindi', 'RRR.jpg', '2022-11-28 14:12:48'),
(14, 'Bhool Bhulaiyaa 2', ' Bhool Bhulaiyaa 2 (transl. Labyrinth 2) is a 2022 Indian Hindi-language comedy horror film directed by Anees Bazmee, written by Aakash Kaushik and Farhad Samji. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Aakash Kaushik', 'Anees Bazmee', '2022-05-20', 'Hindi', 'Bhool Bhulaiya 2.jpg', '2022-11-28 14:13:08'),
(15, 'Ek Villain Returns', ' Ek Villain Returns is a 2022 Indian Hindi-language action thriller film[5][6] written and directed by Mohit Suri, being a standalone sequel to his 2014 film Ek Villain, and produced by T-Series and Balaji Motion Pictures.[7] It stars John Abraham, Arjun Kapoor, Disha Patani and Tara Sutaria. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Mohit Suri', 'Mohit Suri', '2022-07-29', 'Hindi', 'Ek.jpg', '2022-11-28 14:15:24'),
(16, 'Badhaai Do', ' Badhaai Do (transl. give the good news) is a 2022 Indian Hindi comedy drama film depicting a couple in a lavender marriage. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', ' Suman Adhikary', 'Harshavardhan Kulkarni', '2022-02-11', 'Hindi', 'Badhai.jpg', '2022-11-28 14:15:34'),
(17, 'Wrong No.', ' Wrong No. (also written as Wrong Number) is a 2015 Pakistani romantic comedy film[1] directed by Yasir Nawaz[2] and co-produced by Yasir Nawaz, Nida Yasir and Hassan Zia under the production banner YNH Films.[3] ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Yasir Nawaz', 'Yasir Nawaz', '2015-07-18', 'Urdu', 'Wrong.jpg', '2022-11-28 14:15:50'),
(18, 'The Legend of Maula Jatt', ' The Legend of Maula Jatt is a 2022 Pakistani Punjabi-language action drama film directed and written by Bilal Lashari. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Nasir Adeeb', 'Bilal Lashari', '2022-10-15', 'Urdu', 'maula.jpg', '2022-11-28 14:15:59'),
(19, 'Sherdil ', ' Sherdil (Urdu: شیر دل \"Lionheart\") is a 2019 Pakistani action film produced by NK Pictures. It is written and produced by Nomaan Khan, directed by Azfar Jafri, and stars Mikaal Zulfiqar, Hassan Niazi, Armeena Rana Khan and Sabeeka Imam.[2] The film revolves around Pakistan Air Force. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Nomaan Khan', 'Azfar Jafri', '2019-03-22', 'Urdu', 'sherdill.jpg', '2022-11-28 14:16:13'),
(20, ' Mehrunisa V Lub U', ' Mehrunisa V Lub U is a 2017 Pakistani romantic socio-comedy film written and directed by Yasir Nawaz.[3][4] The film was released on 26 June 2017.  ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Yasir Nawaz', 'Yasir Nawaz', '2017-06-26', 'Urdu', 'Mehrunisa.jpg', '2022-11-28 14:16:24'),
(21, 'Actor in Law ', ' Actor in Law is a 2016 Pakistani socio-comedy film directed by Nabeel Qureshi, co-written and produced by Fizza Ali Meerza along with Mehdi Ali. ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Fizza Ali Meerza', 'Nabeel Qureshi', '2016-09-18', 'Urdu', 'Actor_in_Law.jpg', '2022-11-28 14:10:34'),
(22, '3 Idiots', ' 3 Idiots is a 2009 Indian Hindi-language coming-of-age comedy-drama film written and directed by Rajkumar Hirani, co-written by Abhijat Joshi and produced by Vidhu Vinod Chopra.  ', 'https://www.youtube.com/watch?v=ra7kNb5rU8g', '5', 'Abhijat Joshi', 'Rajkumar Hirani', '2009-12-25', 'Hindi', 'three-idiots.jpg', '2022-11-28 14:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `th_id` int(11) NOT NULL,
  `th_name` varchar(50) DEFAULT NULL,
  `th_location` text DEFAULT NULL,
  `th_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`th_id`, `th_name`, `th_location`, `th_created`) VALUES
(1, 'Neuplex', 'The Place Khayaban-e-Shaheen DHA Phase 8, Karachi 75500. ', '2022-11-28 10:07:08'),
(2, 'Cineplex', '5 Khayaban-e-Jami, Block 9 Clifton, Karachi, Karachi City, Sindh 75600', '2022-11-28 10:07:08'),
(3, 'Atrium', ' 249, Staff Lines، Main Zaibunnisa Street, Karachi Cantonment صدر, Karachi, Karachi City, Sindh 74400', '2022-11-28 10:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `t_id` int(11) NOT NULL,
  `t_class` varchar(50) DEFAULT NULL,
  `no_of_tickets` int(11) DEFAULT NULL,
  `t_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`t_id`, `t_class`, `no_of_tickets`, `t_price`) VALUES
(1, 'Box', 20, 300),
(2, 'GOLD', 20, 750),
(3, 'Platinum', 20, 500),
(4, 'Silver', 20, 550);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(11) NOT NULL,
  `time_value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `time_value`) VALUES
(1, '12 noon'),
(2, '3 pm'),
(3, '6 pm'),
(4, '9 pm prime time'),
(5, '12 midnight');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `mt_id` int(11) NOT NULL,
  `mt_name` varchar(50) DEFAULT NULL,
  `mt_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`mt_id`, `mt_name`, `mt_created`) VALUES
(1, ' Action ', '2022-11-28 10:36:00'),
(2, ' Thriller ', '2022-11-28 10:36:00'),
(3, ' Drama ', '2022-11-28 10:36:00'),
(4, ' Comedy ', '2022-11-28 10:36:00'),
(5, ' Sci-fi ', '2022-11-28 10:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) DEFAULT NULL,
  `u_email` varchar(50) DEFAULT NULL,
  `u_uname` varchar(50) DEFAULT NULL,
  `u_password` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_uname`, `u_password`) VALUES
(1, 'Hafsa Khan', 'hafsa@gmail.com', NULL, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`uc_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`th_id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`mt_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ads_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `uc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `th_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `mt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
