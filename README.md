# Skeleton

Skeleton acts as an application architecture example that uses:

  - DDD
  - Hexagonal / Layers
  - CQRS

## About the structure

* ***Kernel (aka `Core`)*** - code that represents whole application. `Kernel` consists of bounded contexts that solve single problem (e.g. `Identity`).
* ***SharedKernel*** - code that is shared across all bounded contexts.

### Bounded contexts in depth

Each module consists of 4 layers:
  - Domain
  - Infrastructure
  - Application
  - UserInterface

#### Domain layer

Domain layer is responsible for defining and maintaining business rules of the application. This layer contains classes like entities, repositories (usually interfaces), domain events, value objects and domain services.

#### Infrastructure layer

This layer consist most vendor specific implementations of the interfaces defined by Domain and Application layers (e.g. `UserRepository` interface is implemented using Doctrine ORM or `Mailer` interface is implemented using SwiftMailer library). 

#### Application layer

Application layer acts as a middle-man between infrastructure and domain. For example, controller accepts HTTP request (Infrastructure layer), converts that request into use-case (e.g. `RegisterUser`) command and dispatches it for command handler (Application layer) to take care of it by orchestrating entities, domain services (Domain layer).
This layer can also consist code that is needed by the application itself, but does not necessarily fall into Domain (e.g. `Mailer`, `Logger`).

#### UserInterface layer

UserInterface layer is the part through which user (be it actual user or 3rd party system) enters the application, for example Web API or Console commands. 
Services in this layer are mostly implemented using frameworks & libraries, similar to Infrastructure layer, that's why it commonly referred as primary infrastructure layer.

## Reference

Example code in this repository _tries_ to follow architecture defined in this [schema](https://herbertograca.files.wordpress.com/2018/11/070-explicit-architecture-svg.png?w=1100). 

## Code example

See `/src` directory of this repository for minimal example.