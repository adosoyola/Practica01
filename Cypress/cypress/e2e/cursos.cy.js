describe('Pruebas módulo Cursos', () => {
  it('Home de Cursos muestra mensaje', () => {
    cy.visit('/cursos');
    cy.contains('Bienvenido al módulo de Cursos');
  })
  it('Lista de Cursos muestra mensaje', () => {
    cy.visit('/cursos/lista');
    cy.contains('Listado de Cursos');
  });
})