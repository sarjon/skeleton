# Skeleton

Skeleton acts as an application architecture example that uses:

  - DDD
  - Hexagonal / Layers
  - CQRS

## About the structure

* ***Kernel (aka `Core`)*** - code that represents whole application. `Kernel` consists of small modules that solve single problem (e.g. `Identity`).
* ***SharedKernel*** - code that is shared across all `Kernel` modules.

### Modules in depth

Each module consists of 3 layers:
  - Domain
  - Infrastructure
  - Application

#### Domain layer

Domain layer is responsible for defining and maintaining business rules of the application. This layer contains classes like entities, repositories (usually interfaces), domain events, value objects and domain services.

#### Infrastructure layer

This layer consist most vendor specific implementations of the interfaces defined by Domain and Application layers (e.g. `UserRepository` interface is implemented using Doctrine ORM or `Mailer` interface is implemented using SwiftMailer library). 

Infrastructure layer is also divided into two:

- Primary - this is the part through which user enters the application, for example HTTP protocol, Console commands, but is implemented using frameworks & libraries.
- Secondary - this is the part that application needs, but cannot do it on its own, for example send email using `SwiftMailer` or persist entities using `Doctrine`, this part is also adapting frameworks and libraries to Application/Domain interfaces.

#### Application layer

Application layer acts as a middle-man between infrastructure and domain. For example, controller accepts HTTP request (Infrastructure layer), converts that request into use-case (e.g. `RegisterUser`) command and dispatches it for command handler (Application layer) to take care of it by orchestrating entities, domain services (Domain layer).
This layer can also consist code that is needed by the application itself, but does not necessarily fall into Domain (e.g. `Mailer`, `Logger`).

## Code example

See `/src` directory of this repository for minimal example.