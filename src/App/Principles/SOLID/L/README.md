# The Liskov Substitution Principle

De modo bem resumido, esse princípio prega que todo subtipo ou subclasse deve ser capaz de entregar o mesmo valor que sua classe ou objeto pai.

Veremos a seguir um exemplo que quebra esse princípio e como resolvê-lo (de forma simples).

## Hands On
Aqui, vemos uma classe *House* e uma classe *MotorHome* que herda suas propriedades.

De certa forma, as duas servem como moradia, certo?

Porém, ainda que tenham propriedades em comum, também possuem caracteristícas próprias que a outra não possuem, mesmo sendo um subtipo de **moradia**.

Por exemplo, para se ter uma casa é preciso pagar IPTU.
![House](house-no-L.png "")

Sabemos que motor-home é um subtipo de casa, então podemos simplesmente herdá-la:

![MotorHome extends House](motor-home-no-L.png "")

Porém, isso não faz muito sentido. Não precisamos pagar IPTU de um motor-home.

![Not the best example](example-no-L.png "")

## Solução

Deveríamos ter estabelecido um "contrato" que define as propriedades de uma moradia. Por exemplo:

![Abstract Residence](abstract-residence.png "")

Agora, vejamos como fica a responsabilidade de cada entidade com nosso contrato estabelecido:

![House extends AbstractResidence](house-with-L.png "")
![MotorHome extends AbstractResidence](motor-home-with-L.png "")

Muito melhor, não acha? :)

---

> ### Obs.: Misturei português com inglês, sei que não foi uma boa prática (*Sorry about that ...*)
> ### Mero exemplo ilustrativo, sem complexidade
