%Hechos:

%Tipos de Pacientes

pacientes('ni�os').
pacientes('adolecentes').
pacientes('adultos').
pacientse('adultos_mayores').

%Precios consultas y medicinas.

precios(25.00).
precios(30.00).
precios(40.00).
precios(50.00).
precios(319.00).
precios(18.00).
precios(86.00).
precios(22.00).

%Tipos de consulta

tipo_consulta('ni�os',25.00).
tipo_consulta('adolecentes',30.00).
tipo_consulta('adultos',40.00).
tipo_consulta('adultosmayores',50.00).


%Medicinas.

medicina('oseltavimir').
medicina('ranitidina').
medicina('doxiciclina').
medicina('paracetamol').

%Precios de las medicinas.

preXmedicina('oseltamivir',319.00).
preXmedicina('ranitidina',18.00).
preXmedicina('doxiciclina',86.00).
preXmedicina('paracetamol',22.00).


%Regla para sacar el Costo de consulta

total_consulta_paciente(X,Y):-tipo_consulta(X,Y),write(Y).

%Regla para sacar el Costo de medicina

total_costo_medicina(X,Y):-preXmedicina(X,Y),write(Y).

% Regla para obtener la suma entre el costo de la consulta y el costo de
% la medicina

sumatotal(X,S,P,Y,Z):-tipo_consulta(X,S),preXmedicina(P,Y), Z is Y + S,write(Z).
