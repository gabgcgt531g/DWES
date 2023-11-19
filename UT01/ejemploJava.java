import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class miServlet extends HttpServlet {

	public void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException {

		res.setContentType("text/html");
		PrintWriter out = res.getWriter();

		int num1 = Integer.parseInt(req.getParameter("num1"));
		int num2 = Integer.parseInt(req.getParameter("num2"));

		out.println("<!DOCTYPE html>");
		out.println("<html>");
		out.println("  <head>");
		out.println("    <title>Prueba de servlet</title>");
		out.println("  </head>");
		out.println("  <body>");
		out.println("    Prueba de servlet Java.");
		out.println("    La suma de " + num1 + " + " + num2 + " es: " + (num1 + num2));
		out.println("  </body>");
		out.println("</html>");
	}
}
