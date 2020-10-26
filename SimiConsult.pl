:-dynamic enfermedades/1.

%Declaracion de enfermedades


enfermedad(alergia).
enfermedad(chikungunya).
enfermedad(conjuntivitis).
enfermedad(dengue).
enfermedad(alzheimer).
enfermedad(anemia_severa).
enfermedad(anorexia).
enfermedad(apendicitis).
enfermedad(bronquiolitis).
enfermedad(cistitis).
enfermedad(colera).
enfermedad(diabetes).
enfermedad(embarazo).
enfermedad(escoliosis).
enfermedad(gastritis).
enfermedad(gripe).
enfermedad(leucemia).
enfermedad(migra�a).
enfermedad(miopia).
enfermedad(neumonia).
enfermedad(coronavirus).

%Enfermedades con sus sintomas

enfermedad_sintoma(alergia):-

    sintoma('estornudos'),
    sintoma('ojos llorosos'),
    sintoma('ardor en la nariz'),
    sintoma('picor en la garganta/boca/labios'),
    sintoma('inflamacion de boca/vias respiratorias').


enfermedad_sintoma(bronquiolitis):-

    sintoma('tos'),
    sintoma('mocos'),
    sintoma('fatiga'),
    sintoma('somnolencia'),
    sintoma('dolor en el torax').


enfermedad_sintoma(conjuntivitis):-

    sintoma('lagrimeo'),
    sintoma('picor en los ojos'),
    sintoma('ojos rojos').


enfermedad_sintoma(chikungunya):-

    sintoma('fiebre'),
    sintoma('erupciones en la piel'),
    sintoma('dolores musculares'),
    sintoma('dolor de cabeza'),
    sintoma('dolores articulares').

enfermedad_sintoma(alzheimer):-

    sintoma('perdida de memoria'),
    sintoma('dificultad para pensar'),
    sintoma('dificultad para hablar'),
    sintoma('dificultad para leer'),
    sintoma('dificultad visual'),
    sintoma('confusion'),
    sintoma('desorientacion').

enfermedad_sintoma(anemia_severa):-

    sintoma('falta de energia'),
    sintoma('debilidad'),
    sintoma('mareos'),
    sintoma('palpitaciones'),
    sintoma('palidez'),
    sintoma('piel amarilla'),
    sintoma('perdida de vision').

enfermedad_sintoma(apendicitis):-

    sintoma('dolor abdominal'),
    sintoma('vomitos'),
    sintoma('fiebre'),
    sintoma('colicos estomacales'),
    sintoma('calambres').

enfermedad_sintoma(cistitis):-

    sintoma('dolor de espalda'),
    sintoma('deseos de orinar frecuentes'),
    sintoma('dolor en el vientre'),
    sintoma('colicos estomacales'),
    sintoma('ausencia de orina').

enfermedad_sintoma(colera):-

    sintoma('diarrea abundante'),
    sintoma('nauseas'),
    sintoma('vomitos'),
    sintoma('calambres mosculares'),
    sintoma('defenza baja'),
    sintoma('deshidratacion').

enfermedad_sintoma(dengue):-

    sintoma('dolor de cabeza'),
    sintoma('dolor en los ojos'),
    sintoma('dolores articulares'),
    sintoma('debilidad'),
    sintoma('nauseas'),
    sintoma('defenza baja'),
    sintoma('fiebre alta').

enfermedad_sintoma(diabetes):-

    sintoma('vision borrosa'),
    sintoma('aumento o perdida de peso'),
    sintoma('erupciones cutaneas'),
    sintoma('adormecimiento de pies'),
    sintoma('somnolencia').

enfermedad_sintoma(embarazo):-

    sintoma('ausencia del periodo'),
    sintoma('dolor en los pezones'),
    sintoma('nauseas'),
    sintoma('vomitos'),
    sintoma('sensibilidad aumentada a olores'),
    sintoma('hinchazon en los senos'),
    sintoma('aumento de apetito').

enfermedad_sintoma(escoliosis):-

    sintoma('hombros desiguales'),
    sintoma('cintura dispareja'),
    sintoma('inclinacion hacia un lado'),
    sintoma('dolor de espalda'),
    sintoma('dificultad para respirar'),
    sintoma('perdida de reflejos').

enfermedad_sintoma(gastritis):-

    sintoma('ardor de estomago'),
    sintoma('nauseas'),
    sintoma('vomitos'),
    sintoma('eructos'),
    sintoma('hinchazon abdominal').


enfermedad_sintoma(gripe):-

    sintoma('estornudos'),
    sintoma('tos'),
    sintoma('flemas'),
    sintoma('cuerpo cortado'),
    sintoma('fiebre').

enfermedad_sintoma(leucemia):-

    sintoma('escalofrios'),
    sintoma('anemia'),
    sintoma('palidez'),
    sintoma('debilidad'),
    sintoma('perdida de apetito'),
    sintoma('perdida de peso'),
    sintoma('dolor en articulaciones'),
    sintoma('encias sangrantes').

enfermedad_sintoma(miopia):-

    sintoma('buena vision cercana'),
    sintoma('dificultad para ver de lejos').

enfermedad_sintoma(migrana):-

    sintoma('dolor de cabeza'),
    sintoma('vision borrosa'),
    sintoma('dolor de ojos'),
    sintoma('nauseas'),
    sintoma('vomitos'),
    sintoma('debilidad'),
    sintoma('sensibilidad a la luz').

enfermedad_sintoma(neumonia):-

    sintoma('escalofrio'),
    sintoma('tos'),
    sintoma('dolor de pecho'),
    sintoma('dolor al respirar'),
    sintoma('falta de oxigeno'),
    sintoma('fiebre').

enfermedad_sintoma(coronavirus):-

    sintoma('tos seca'),
    sintoma('fiebre'),
    sintoma('cuerpo cortado'),
    sintoma('dolor de pecho'),
    sintoma('dolor al respirar'),
    sintoma('falta de oxigeno').

%Descripcion de las enfermedades

:- discontiguous descripcion/2.

descripcion_enfermedad(X):-descripcion(X,Y),write(Y).

descripcion(alergia,'Es un conjunto de alteraciones de car�cter respiratorio, nervioso o eruptivo que se produce en el sistema inmunologico por una extrezada sensibilidad del organismo a ciertas sustancias a las que a sido expuesto, y que en condiciones normales no causan estas alteraciones.').

descripcion(alzheimer,'Es una enfermedad cerebral que causa problemas en la memoria, la forma de pensar y el caracter o la manera de comportarse. Esta enfermedad noes una forma normal del envejecimiento').

descripcion(anemia_severa,'Es una enfermedad causada debido a la falta de hemoglobina en la sangre que esta por debajo del nivel normal o a niveles menos normales de gl�bulos rojosen la sangre.').

descripcion(anorexia,'Es un trastorno de origen neurotico que se caracteriza por un rechazo sistem�tico de los alimentos y que se observa generalmente en personas j�venes; suele ir acompa�ado de v�mitos provocados, adelgazamiento extremo y, es el caso de las mujeres, desaparici�n de la mestruaci�n').

descripcion(apendicitis,'Es una enfermedad inflamatoria infecciosa del apendice cecal, que, como su nombre lo indica, es un apendice que tiene la parte inicial del intestino grueso denominada ciego. Al ser una inflamaci�n aguda, el dolor es de r�pido inicio.').

descripcion(bronquiolitis,'Es la inflamacion de las vias repiratorias peque�as, fundamentalmente en ni�os menores de 2 a�os. La bronquiolitis se caracteriza por secrecion nasal, tos y dificultad para respirar n lactantes con o sin fiebre, precedido por una ineccion respiratoria alta, tal como una coriza o una otitis media.').

descripcion(chikungunya,'Este es un virus que se adquiere por inoculaci�n durante la picadura de un mosquito de genero Aedes que se encuentra infectado, este mismo mosquito transmite otros virus de la misma familia capaces de producir tambi�n otras fiebres hemorr�gicas como es el caso del Dengue y la Fiebre Amarilla. Esta enfermedad no se trasmite por las secreciones ni por el contacto directo con personas enfermas.').

descripcion(cistitis,'Es una infeccion de la mucosa (urocistitis) o de toda la pared (pencstitis) de la vejiga. Tales infecciones urinarias pueden presentarse de forma aislada aguda o repetirse de forma recurrente pudiendo finalmente dar lugar a una cistitis cr�nica. La mayor parte de las veces las cistitis no presentan complicaciones.').

descripcion(conjuntivitis,'Es una inflamaci�n o irritaci�n de la conjuntiva(membrana que recubre los parpados y el globo ocular). Se trata de una infecci�n benigna, pero es necesario tratarla para evitar complicaciones mayores.').

descripcion(colera,'Es una enfermedad infecto-contagiosa intstinal aguda, provocada por los serotipos 01 0139 de la bacteria Vibrio cholerae, que produce una dearrea secretoria caracterizada por deposiciones semejantes al agua de arroz, con un marcado olor a pesacado, una elevada cantidad de sodio, bicarbonato y potasio, y una escasa cantidad de proteinas.').

descripcion(dengue,'Es una infecci�n virica trasmitida por la picadura de las hembras infectadas de mosquitos Aedes. Hay cuatro serotipos de virus del dengue. El dengue se presenta en los climas tropicales y subtropicales de todo el planeta, sobre todo en las zonas urbanas y semiurbanas.').

descripcion(diabetes,'Es una enfermedad cr�nica e irreversible del metabolismo en la que se produce un exceso de glucosa o az�car en la sangre y en la orina; es debido a una disminuci�n de la sreci�n de la hormona insulina o a una deficiencia de su acci�n.').

descripcion(embarazo,'Es el periodo mediante el cual se gesta y desarrolla un embri�n, este lapso de tiempo es de aproximadamente 9 meses en seres humanos.').

descripcion(escoliosis,'Es un problema de salud que causa una curvatura de lado a lado en la columna vertebral. La curvatura puede tener forma de S � C En la mayoria de los casos, no se sabe que causa esta curvatura.').

descripcion(gastritis,'Es la inflamaci�n de la mucosa g�strica, que en la gastroacopia se ve enrojecida, presentadose en forma de manchas rojisas, las cuales representan irritaci�n o hemorragias subepiteliales. Sin embargo, el diagn�stico preciso se obtiene por exploraci�n endosc�pica. En esta se apreciar� si es solo una parte del est�mago la que est� afectada o toda la esfera g�strica.').

descripcion(gripe,'Es una enfermedad aguda, febril y contagiosa causada por virus. A diferencia de un resfriado, la gripe es una enfermedad que puede tener una evoluci�n grave. La gripe estacional puede producir epidemias, que se concentran en un momento determinado en ciertos lugares.').

descripcion(leucemia,'Es una enfermedad de los �rganos productores de la sangre que se caracteriza por la proliferaci�n excesiva de leucocitos o gl�bulos blancos en la sangre y en la m�dulos �sea.').

descripcion(migrana,'Es un dolor fuerte de cabeza que afecta, generalmente, a un lado o una parte de ella y a menudo va acompa�ado de nauseas y v�mitos.').

descripcion(miopia,'Es una anomalia o defecto del ojo que produce una visi�n borrosa o poco clara de los objetos lejanos; se debe a una curvatura excesiva del cristalino que hace que las im�genes de los objetos se formen un poco antes de llegar a la retina.').

descripcion(neumonia,'Es una inflamaci�n de las pulmones, causada por la infecci�n de un virus o una bacteria, que se caracteriza por la presencia de fiebre alta, escalofr�os, door intenso en el costado afectado del t�rax, tos y expectoraci�n.').

descripcion(coronavirus,'Se trata de un virus de transmicion persona a persona o por tocar superficies donde el infectado haya tosido o estornudado. El coronavirus SARS-Cov-2 es un virus que apareci� en China. Despu�s se extendi� a todos los continentes del mundo provocando una pandemia. Actualmente Europa y Am�rica son los m�s afectados. Este nuevo virus, provoca la enfermedad conocida con el nombre de COVID-19.').

%Receta Medica

:- discontiguous receta/3.

receta_medica(X):-receta(X,Y),write(Y).

receta(gripe,'Oseltamivir - CAPSULA - Cada capsula contiene: Oseltamivir 75mg. Envase con 20 capsulas. Via de administracios oral - Adultos y ni�os mayores de 12 a�os: 75mg cada 12 horas, durante 5 dias.').

receta(gastritis,'Ranitidina GRAGEA O TABLETA - Cada gragea o tableta contiene: Clorhidrato de ranitidina equivalente a 150 mg de ranitidina.
Envase con 20 grageas o tabletas. Via de administracion oral - Adultos:
150 mg a 300 mg por v�a oral cada 12 a 24 horas. Ni�os: 2 a 4 mg/kg /d�a, cada 12 horas.').

receta(colera,'Doxiciclina - C�PSULA O TABLETA - Cada c�psula o tableta contiene:
Hiclato de doxiciclina equivalente a 100 mg de doxicilina. Envase con 10 c�psulas o tabletas. V�a de administraci�n y Dosis: Oral - Adultos: el primer d�a 100 mg cada 12 horas y continuar con 100 mg/d�a, cada 12 � 24 horas Ni�os mayores de 10 a�os: 4 mg/kg de peso corporal/d�a, administrar cada 12 horas el primer d�a. Despu�s 2.2 mg/kg de peso corporal/d�a, dividida cada 12 horas.').

receta(coronavirus,'Se recomienda reposo absoluto y que el sistema inmunologico consiga vencer el virus al rededor de 14 dias que es lo que dura en desarrollarse el virus. Se recomienda quedarse en casa para evitar su transmision. Actualmente no hay cura para esta enfermedad. Se puede tomar Paracetamol - TABLETA - Cada tableta contiene: Paracetamol 500mg. Envase con 10 tabletas. Via de Adeministracion: Oral Adultos: 250-500 mg cada 4 � 6 horas. Ni�os: De 10 a 30 mg/kg de peso corporal, cada 4 � 6 horas. Esto solamente es para atenuar la fiebre si los sintomas se complican y tiene dificultad para respirar acudir de inmediato al hospital').

%Reglas para ir preguntando por los sintomas

sintoma(X):-pregunta('Usted tiene',X).

pregunta(Incognita,X):-write(Incognita),write(' '),write(X),write(' '),write('? si/no,').

insertarEnfermedad(X):-assert(enfermedades(X)).


abrir_conexion:-odbc_connect('SimiIA', _,[user(root),password(''), alias(observacion),open(once)]).
cerrar_conexion:-odbc_disconnect('observacion').


consulta_pretotal(Id,Costo):- odbc_query('observacion','SELECT consulta.Id,precios_consulta.Costo FROM precios_consulta INNER JOIN consulta ON precios_consulta.id_consulta = consulta.id_consulta;', row(Id,Costo)).










