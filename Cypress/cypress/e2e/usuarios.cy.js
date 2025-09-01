describe('Pruebas módulo Usuarios', () => {
  it('Home de Usuarios muestra mensaje', () => {
    cy.visit('/usuarios');
    cy.contains('Bienvenido al módulo de Usuarios');
  })
   it('Lista de Usuarios muestra mensaje', () => {
    cy.visit('/usuarios/lista');
    cy.contains('Listado de Usuarios');
  });
})