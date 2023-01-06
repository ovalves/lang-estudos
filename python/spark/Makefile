SHELL := /bin/bash

help:
	@echo ""
	@echo "Commands:"
	@echo "  start       Iniciar todos os serviços"
	@echo "  stop        Parar todos os serviços"
	@echo "  build-venv  Criar o ambiente virtual"
	@echo "  start-venv  Iniciar o ambiente virtual"

start:
	docker compose -f ./docker-compose.yml up -d

stop:
	docker compose -f ./docker-compose.yml down -v

build-venv:
	python -m venv venv

start-venv:
	@source venv/bin/activate