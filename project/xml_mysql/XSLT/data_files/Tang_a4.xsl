<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
    <html>
    <body  onload="myFunction()">

		<TABLE BORDER="1" CELLPADDING="5">
			<THEAD>
				<TH>Last Name</TH>
				<TH>Birth Year</TH>
				<TH>Title</TH>
				<TH>Publisher</TH>
				<TH>Publishing Year</TH>
			</THEAD>
			<xsl:for-each select="//book[year>=1990 and year&lt;=1999]" >
				<xsl:sort  select="./author/@Lastname" order="descending"/>
				<TR ALIGN="CENTER">
					<TD>
						<xsl:value-of select="./author/@Lastname"/>
					</TD>
					<TD>
						<xsl:value-of select="./author/@Birth_Year"/>
					</TD>
					<TD>
						<xsl:value-of select="title"/>
					</TD>
					<TD>
						<xsl:value-of select="publisher"/>
					</TD>
					<TD>
						<xsl:value-of select="year"/>
					</TD>
				</TR>
			</xsl:for-each>
		</TABLE>
		<br/>
		
    </body>
    </html>
</xsl:template>

</xsl:stylesheet> 
