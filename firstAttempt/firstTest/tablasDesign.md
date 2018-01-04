# tabla
## catalogo



# tblPedidos -> YistiShoes_Pedidos __DONE__
id                YSP_pedidoId                      unidad por pedido
numeroOrden       YSP_pedidoNumeroOrden             __numeroOrden__ varios pedidos pueden compartir un numero de orden 
embajadorId       YSP_pedidoEmbajadorAccount               apunta al embajador
nombre            YSP_pedidoNombre                  a que nombre esta el pedido
email             YSP_pedidoEmail                  
fecha             YSP_pedidoFecha    fecha que se genero pedido***
estatus           YSP_pedidoEstatus                 YistiShoes_Cat_Estatus   'catEstadoPedido'
cantPares         YSP_pedidoCantidadPares           cantidad de pares totales
totalPedido       YSP_pedidoTotal                   precio total del pedido
confirmado        YSP_confirmado                    email > confirmado
                  YSP_adminAccount                  quien edita el estatus del pedido***

# tblPedidosDetalle -> YistiShoes_PedidoDetalle __DONE__
YSD_idPedido              unidad por par pedido
YSD_pedidoNumeroOrden     __numeroOrden__
YSD_pedidoCantidad
YSD_modelo                'catModelo'   this 3 could be an id pointing at cat or they might form a codeKey
YSD_talla                 'catColor'
YSD_color                 'catTalla' || str || float

YSD_fechaPedido
YSD_precioUnitario        int o text?****


# tblUsers -> YistiShoes_Users __DONE__
id          -> YSU_userId
account     -> YSU_userAccount            la cuenta creada por admin con algun tipo de codeKey**
pass        -> YSU_userPass
permiso     -> YSU_userPermiso  
hash        -> YSU_hash                   para poder cambiar claves

            -> YSU_active
userName    -> YSU_userName               nombre no formal de la empresa
pictureUrl  -> YSU_userPictureUrl         maybe imagen de usuario Logo de la empresa
apuntador para nivel 3***



1. AdminGST

2. AdminEmb
  - EmbAcount-Toyota-01
  - EmbAcount-Toyota-02


  - EmbAcount-mazda-01
  - EmbAcount-mazda-02

3. UsuariosGenrales
  - UserAcount -> 
  *embajador


# YistiShoes_Cat_Embajadores
id
clave


# YistiShoes_UsersDetalle
id
clave


# YistiShoes_Catalogo
YSC_idCatalogo
YSC_modelo
YSC_color
YSC_talla
YSC_precio

YSC_code  MOD1-BLK-27.5   modelo: 1 ; color: black ; talla: 27.5





# Jerarquía
## catPrivileges || catPermisos  -> YistiShoes_Cat_Permisos __DONE__
YSP_permisoLv
YSP_permisoTxt

1 | AdminGST
2 | Embajador
3 | Usuario

// Definition
1. Tendra acceso a todos los pedidos
2. Emabajador hace concentrados de su zona donde filtraran y actualizan el estado de los pedidos 'catEstadoPedido'
3. User hace el log in y relaciona su pedido con su Embajador


## catEstatusPedido  -> YistiShoes_Cat_Estatus __DONE__
YSE_estatusId
YSE_estatusName
YSE_estatusCode

1 | pedido      | r
2 | pagado      | p
3 | recibido    |          not
4 | fabricando  |         not necessary
5 | entregado   | d

r - requested
p - paid 
d - delivered
** se podria trabajar con colores en el display de la lista

## catModelo -> YistiShoes_Cat_Modelo __DONE__
YSM_modeloId
YSM_modeloName
YSM_modeloCode
YSM_modeloPicUrl
YSM_modeloActivo

1 | bota | BTS | __dir/pic/cat/modelo/bts
2 | gala | GLA | __dir/pic/cat/modelo/bts
3 | lady | LDY | __dir/pic/cat/modelo/bts

## -> YistiShoes_Cat_Color __DONE__
YSC_colorId
YSC_colorName
YSC_colorCode
YSC_colorPicUrl
YSC_colorActivo

1 | azul  | BLU | __dir/pic/cat/color/blu
2 | cafe  | BRW | __dir/pic/cat/color/brw
3 | negro | BLK | __dir/pic/cat/color/blk


27.5 BLK uno 190


### Notas
cada cuado se van a ejecutar los queries

catColor y catModelos, must be cat, so we get them dinamicly in the page
** for that to happen we need to connect those to Catalogo

donde se va a establecer el estatus del pedido

seguimiento de pedido para yuyin, cuando escanen el codigo de un paquete se acutalize el estatus de pedido