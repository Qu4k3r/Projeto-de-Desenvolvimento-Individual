# The Interface Segregation Principle

Esse princípio diz que "clientes" (classes) que "assinam" um "contrato" (interface) não devem ser reféns de métodos e/ou atributos que não sejam necessários.

Traduzindo:
Essas interfaces devem ser bem segregadas para que todo o contrato seja cumprido.

## Hands On
Aqui, temos as classes *House* e *Apartment* que implementam a interface *ResidenceInterface*.

![residence interface](residence-interface.png)
![house-residence](house-residence.png "")
![apartment-residence](apartment-residence.png "")

Como podemos ver, o atributo `roof` e o método `paintRoof` são complementamente inúteis na classe *Apartment*.

## Solução

Nesse caso, devemos isolar cada interface para que contrato seja cumprido da maneira correta

![house-interface](house-interface.png)
![apartment-interface](apartment-interface.png)
![house-house-interface](house-implements-house-interface.png)
![apartment-apartment-interface](apartment-implements-apartment-interface.png)

---

> ### Mero exemplo ilustrativo, sem complexidade


> ### Uma outra solução seria implementar uma classe abstrata para que *House* e *Apartment* herdassem o método `paintWindow` e, assim, evitar duplicação de código e/ou até mesmo alguma regra de negócio em códigos mais complexos
