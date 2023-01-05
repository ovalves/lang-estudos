SHELL := /bin/bash

help:
	@echo ""
	@echo "Commands:"
	@echo "  dev-start       Iniciar todos os serviços"
	@echo "  dev-stop        Parar todos os serviços"

start:
	docker compose -f ./docker-compose.yml up -d

stop:
	docker compose -f ./docker-compose.yml down -v