# Memoria: phpmd standalone `.phar`

## Regola

- **NON** installare `phpmd/phpmd` tramite Composer per usare il tool.
- **USA** `phpmd` come **standalone `.phar`** (canonico: `laravel/phpmd.phar`).

## Perché (filosofia)

- Eviti drift tra versioni del tool (CI vs locale) e riduci rumore nei merge multi-agente.
- Mantieni il root `composer.json` focalizzato sul prodotto, non sugli strumenti di quality gate.
- Stesso binario, stesso comportamento: la qualità diventa ripetibile e “governata”.

## Comando standard

Da dentro `laravel/`:

```bash
php phpmd.phar . text cleancode,codesize,controversial,design,naming,unusedcode
```

## Se manca il file `.phar`

```bash
curl -L https://phpmd.org/static/latest/phpmd.phar -o phpmd.phar
chmod +x phpmd.phar
```

