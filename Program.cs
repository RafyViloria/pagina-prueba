var builder = WebApplication.CreateBuilder(args);
var app = builder.Build();

app.UseStaticFiles(); // Permite servir archivos HTML, CSS y JS desde wwwroot

app.Run();