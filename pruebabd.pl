
pensionado(1).
pensionado(5).
trabajador_luz(2).
trabajador_luz(1).
%LUGARES%
pertenecea(1,"San Miguel").
pertenece(2,"Vinaterias").
pertenece(3,"Cortínez").
pertenece(4,"Infonavit Mochicahui").
pertenece(5,"Tabachines").

zonarural('Vinaterias').
zonarural('Cortínez').
zonarural('San Miguel').
zonaurbana('Infonvavit Mochiahui').
zonamarginada('Tabachines').

%Conexion Mysql%
abrir_conexion:-odbc_connect('pedos', _,[user(root),password(''), alias(prolog),open(once)]).
cerrar_conexion:-odbc_disconnect('prolog').

%LUZ%
precio_kw(Costo_kw):- odbc_query('prolog','SELECT Costo_kw FROM luz where Id_luz=1',row(Costo_kw)).
total_luz(Id_cliente,X):- odbc_query('prolog','SELECT Id_cliente, Consumo_luz FROM consumo_luz',row(Id_cliente,Consumo_luz)),precio_kw(Costo_kw) , X is Consumo_luz * Costo_kw, not(trabajador_luz(Id_cliente)).
total_luz(Id_cliente,Y):- odbc_query('prolog','SELECT Id_cliente, Consumo_luz FROM consumo_luz',row(Id_cliente,Consumo_luz)),precio_kw(Costo_kw) , X is Consumo_luz * Costo_kw, pago_luz(Id_cliente,X,Y).


%AGUA%
precio_agua(Costo_m3):- odbc_query('prolog','SELECT Costo_m3 FROM agua where Id_agua=1',row(Costo_m3)).
total_agua(Id_cliente,Y):- odbc_query('prolog','SELECT Id_cliente,Consumo_agua FROM consumo_agua', row(Id_cliente,Consumo_agua)),precio_agua(Costo_m3) , X is Consumo_agua * Costo_m3 , pago_pensionado(Id_cliente,X,Y) .
total_agua(Id_cliente,X):- odbc_query('prolog','SELECT Id_cliente,Consumo_agua FROM consumo_agua', row(Id_cliente,Consumo_agua)),precio_agua(Costo_m3) , X is Consumo_agua * Costo_m3, not(pensionado(Id_cliente)) .

%GAS%
precio_gas(Costo):- odbc_query('prolog', 'SELECT Costo FROM gas', row(Costo)).
total_gas(Id_cliente,X):- odbc_query('prolog','SELECT Id_cliente,Consumo_gas FROM consumo_gas', row(Id_cliente,Consumo_gas)), precio_gas(Costo), X is Consumo_gas * Costo.


%MEGACABLE%
total_paquete(Id_cliente,Costo):- odbc_query('prolog','SELECT inteligencia_ia.consumo_serv.Id_cliente, inteligencia_ia.servicios.Costo FROM inteligencia_ia.servicios INNER JOIN inteligencia_ia.consumo_serv ON servicios.id_paquete = consumo_serv.id_paquete;', row(Id_cliente,Costo)).


%PENSIONADOS%
pago_pensionado(X,Y,Z):- pensionado(X) , Z is Y * 0.75.
pago_luz(X,Y,Z):- trabajador_luz(X), Z is Y * 0.

